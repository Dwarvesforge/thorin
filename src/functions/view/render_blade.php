<?php

namespace thorin;

use Philo\Blade\Blade;
$t_blade = null;

/**
 * Render a view with the data passed to it and return it
 *
 * @param       {String}        $slug       The view slug to render relative to the path.views config
 * @param       {Array}         [$data=null]       The data array to pass as extracted variables to the view
 * @return      {String}                    The rendered view
 * @author 		Olivier Bossel <olivier.bossel@gmail.com>
 */
function render_blade($slug, $data = []) {
	global $t_blade;
    // ensure we have an array and not an object
	if (is_object($data)) $data = get_object_vars($data);
	// allow render something like 'myview/myview' this way 'myview'
	if (is_dir(\Thorin::sanitize_path(\Thorin::config('path.views')) . $slug)) {
		$parts = explode('/', $slug);
		$slug = $slug . '/' . $parts[count($parts)-1];
	}
	// generate blade
	if ( ! $t_blade) {
    	$t_blade = new Blade( \Thorin::sanitize_path(\Thorin::config('path.views')), \Thorin::sanitize_path(\Thorin::config('path.views_cache')));
	}
	return $t_blade->view()->make($slug, $data)->render();
}
