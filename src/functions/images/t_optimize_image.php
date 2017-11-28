<?php

// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;

// create an image manager instance with favored driver
$manager = new ImageManager(array('driver' => 'imagick'));

function t_optimize_image($path) {


// to finally create image instances
	$img = Image::cache(function($image) {
		$image = $image->make($path)->save(t_tailslash(T_CACHE_PATH) . 'images/' . basename($path));
	});
	print '<pre>';
	print_r($img);
	return $img;

	// // new instance
	// $imageCache = new ImageCache();
	// // set the cache directory
	// $imageCache->cached_image_directory = t_tailslash(T_CACHE_PATH) . 'images/';
	// // cache and return the compressed image
	// return $imageCache->cache($path);
}
