<?php

namespace thorin;

/**
 * Return the app path depending on the `path.app` config
 *
 * @param       {String}        $slug       An optional slug to add to the root url
 * @return      {String}                    The corresponding root url
 *
 * @example    php
 * Thorin::path_app('config/hello.php');
 * // /app/root/config/hello.php
 *
 * @author 		Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function path_app($slug = '') {
	return \Thorin::path_sanitize(\Thorin::config('path.app')) . ltrim($slug, '/');
}
