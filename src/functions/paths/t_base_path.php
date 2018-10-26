<?php

/**
 * Return the base path depending on the `paths.BASE` config
 *
 * @param       {String}        $slug       An optional slug to add to the base path
 * @return      {String}                    The corresponding base path
 * @author 		Olivier Bossel <olivier.bossel@gmail.com>
 */
function t_base_path($slug = '') {
	return Thorin::sanitize_path(Thorin::config('paths.base')) . ltrim($slug, '/');
}
