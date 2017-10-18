<?php

use Philo\Blade\Blade;

/**
 * @name    t_render_blade
 * Render a view with the data passed to it and return it
 *
 * @param       {String}        $slug       The view slug to render relative to the S_VIEW_PATH constant config
 * @param       {Array}         [$data=null]       The data array to pass as extracted variables to the view
 * @return      {String}                    The rendered view
 * @author 		Olivier Bossel <olivier.bossel@gmail.com>
 */
function t_render_blade($slug, $data = []) {
    // ensure we have an array and not an object
    if (is_object($data)) $data = get_object_vars($data);
    // generate blade
    $blade = new Blade(t_tailslash(T_VIEWS_PATH), t_tailslash(T_CACHE_PATH));
    return $blade->view()->make($slug, $data)->render();
}