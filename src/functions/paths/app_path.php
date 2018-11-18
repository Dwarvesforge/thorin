<?php

namespace thorin;

/**
 * Return the app path depending on the `paths.app` config
 *
 * @param       {String}        $slug       An optional slug to add to the root url
 * @return      {String}                    The corresponding root url
 * @author 		Olivier Bossel <olivier.bossel@gmail.com>
 */
function app_path($slug = '') {
	return \Thorin::sanitize_path(\Thorin::config('paths.app')) . ltrim($slug, '/');
}