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
function t_render_twig($slug, $data = []) {
    // ensure we have an array and not an object
	if (is_object($data)) $data = get_object_vars($data);
	// allow render something like 'myview/myview' this way 'myview'
	if (is_dir(Thorin::sanitize_path(Thorin::config('paths.VIEWS')) . $slug)) {
		$parts = explode('/', $slug);
		$slug = $slug . '/' . $parts[count($parts)-1];
	}
	// append .twig to the slug if not already present
	if (substr($slug, -5) !== '.twig') {
		$slug = $slug . '.twig';
	}
	// load twig
	$loader = new Twig_Loader_Filesystem(Thorin::sanitize_path(Thorin::config('paths.VIEWS')));
	$twig = new Twig_Environment($loader, array(
		'cache' => Thorin::sanitize_path(Thorin::config('paths.VIEWS_CACHE')),
	));
	// render view
	return $twig->render($slug, $data);
}
