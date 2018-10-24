<?php

// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;

/**
 * Optimize the passed image by compressing (resize and quality) it and save it to the paths.IMAGES_CACHE folder
 * in order to avoid recreating it again and again.
 * The $path argument is relative to the paths.BASE path
 * @param 		{String} 		$path 				The image path to process relative to the document root
 * @param 		{Object} 		[$settings={}] 		The settings to tell how to compress the image
 * @param 		{Boolean} 		[$cache=true] 		true if want to save the optimized image in cache, false if not
 * @return 		{String} 							The optimized image path. If cache is not used, return the image in base64 format
 * @author 		Olivier Bossel <olivier.bossel@gmail.com>
 */
function t_optimize_image($path, $settings = [], $cache = true) {
	$originalSettings = (object) [
		'quality' => Thorin::config('images.QUALITY'),
		'width' => Thorin::config('images.MAX_WIDTH'),
		'height' => Thorin::config('images.MAX_HEIGHT')
	];

	$settings = Thorin::extend($originalSettings, $settings);

	// process the $path argument
	$serverFilePath = Thorin::sanitize_path(Thorin::base_path($path));

	// build the cache path from the T_CACHE_PATH constant
	$serverCachePath = Thorin::sanitize_path(Thorin::config('paths.IMAGES_CACHE'));

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
		return Thorin::root_path($serverCacheFilePath);
	} else {
		// return the image as url encoded
		return $image->encode('data-url', $settings->quality);
	}
}
