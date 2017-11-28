<?php

// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;


function t_optimize_image($path, $quality = 60, $cache = true) {

	// process the $path argument
	$serverFilePath = t_server_root_path($path);

	// handle serverCacheBasePath depending on the $cache argument.
	// if the argument is a string, take that as cache path
	// otherwise, take the T_CACHE_PATH constant as base

	$cacheBasePath = t_root_path(t_tailslash(T_CACHE_PATH) . 'images/');
	if (is_string($cache)) {
		$cacheBasePath = t_root_path(t_tailslash($cache));
	}
	// save the path of the cache folder from the server root
	$serverCachePath = t_server_root_path($cacheBasePath);

	// save the cache file path from the root of the server
	$cacheFilePath = $cacheBasePath . basename($path);
	// append the quality to the image name
	$cacheFilePath = explode('.',$cacheFilePath);
	array_splice($cacheFilePath, count($cacheFilePath)-1, 0, $quality);
	$cacheFilePath = implode('.',$cacheFilePath);

	// init manager
	$manager = new ImageManager(array('driver' => 'gd'));

	if ($cache) {
		$serverCacheFilePath = $serverCachePath . basename($cacheFilePath);
		$cacheTime = (file_exists($serverCacheFilePath)) ? filemtime($serverCacheFilePath) : null;
		if (!$cacheTime || $cacheTime < $fileTime) {
			// save the image in cache
			$manager->make($serverFilePath)->save($serverCacheFilePath, $quality);
		}
		return $cacheFilePath;
	} else {
		// return the image as url encoded
		return $manager->make($serverFilePath)->encode('data-url', $quality);
	}
}
