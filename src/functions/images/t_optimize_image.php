<?php

function t_optimize_image($path) {
	// new instance
	$imageCache = new ImageCache();
	// set the cache directory
	$imageCache->cached_image_directory = t_tailslash(T_CACHE_PATH) . 'images/';
	// cache and return the compressed image
	return $imageCache->cache($path);
}
