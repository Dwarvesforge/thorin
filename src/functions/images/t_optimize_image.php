<?php

// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;

//
// Optimize the passed image by compressing (resize and quality) it and save it to the {cache}/images folder
// in order to avoid recreating it again and again
//
// @param 		{String} 		$path 				The image path to process relative to the document root
// @param 		{Object} 		[$settings={}] 		The settings to tell how to compress the image
// @param 		{Boolean} 		[$cache=true] 		true if want to save the optimized image in cache, false if not
// @return 		{String} 							The optimized image path. If cache is not used, return the image in base64 format
// @author 		Olivier Bossel <olivier.bossel@gmail.com>
//
function t_optimize_image($path, $settings = [], $cache = true) {
	$originalSettings = (object) [
		'quality' => Thorin::config('images.QUALITY'),
		'width' => Thorin::config('images.MAX_WIDTH'),
		'height' => Thorin::config('images.MAX_HEIGHT')
	];

	$settings = t_extend($originalSettings, $settings);

	// process the $path argument
	$serverFilePath = t_root_path($path, true);

	// build the cache path from the T_CACHE_PATH constant
	$serverCachePath = t_sanitize_path(Thorin::config('paths.IMAGES_CACHE'));

	// save the cache file path from the root of the server
	$serverCacheFilePath = $serverCachePath . basename($path);

	// append settings object hash to the file name
	$hash = hash('md5', serialize($settings));
	$serverCacheFilePath = explode('.',$serverCacheFilePath);
	array_splice($serverCacheFilePath, count($serverCacheFilePath)-1, 0, $hash);
	$serverCacheFilePath = implode('.',$serverCacheFilePath);

	// init manager
	$manager = new ImageManager(array('driver' => 'gd'));
	$image = $manager->make($serverFilePath);

	// resize image if needed
	if ($settings->width || $settings->height) {
		$image->resize($settings->width, $settings->height, function ($constraint) {
			$constraint->aspectRatio();
			$constraint->upsize();
		});
	}

	if ($cache) {
		$fileTime = filemtime($serverFilePath);
		$cacheTime = (file_exists($serverCacheFilePath)) ? filemtime($serverCacheFilePath) : null;
		if (!$cacheTime || $cacheTime < $fileTime) {
			print 'make image';
			// save the image in cache
			$image->save($serverCacheFilePath, $settings->quality);
		}
		return t_root_path($serverCacheFilePath);
	} else {
		// return the image as url encoded
		return $image->encode('data-url', $settings->quality);
	}
}
