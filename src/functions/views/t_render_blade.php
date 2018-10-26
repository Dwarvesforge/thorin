<?php

use Philo\Blade\Blade;

/**
 * Render a view with the data passed to it and return it
 *
 * @param       {String}        $slug       The view slug to render relative to the paths.VIEWS config
 * @param       {Array}         [$data=null]       The data array to pass as extracted variables to the view
 * @return      {String}                    The rendered view
 * @author 		Olivier Bossel <olivier.bossel@gmail.com>
 */
function t_render_blade($slug, $data = []) {
    // ensure we have an array and not an object
	if (is_object($data)) $data = get_object_vars($data);
	// allow render something like 'myview/myview' this way 'myview'
	if (is_dir(t_sanitize_path(Thorin::config('paths.VIEWS')) . $slug)) {
		$parts = explode('/', $slug);
		$slug = $slug . '/' . $parts[count($parts)-1];
	}
	// generate blade
    $blade = new Blade( t_sanitize_path(Thorin::config('paths.VIEWS')), t_sanitize_path(Thorin::config('paths.VIEWS_CACHE')));
    return $blade->view()->make($slug, $data)->render();
}
