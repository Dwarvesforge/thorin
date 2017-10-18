<?php

/**
 * @name    t_root_path
 * Return the root website url depending on the T_ROOT_PATH config
 *
 * @param       {String}        $slug       An optional slug to add to the root url
 * @return      {String}                    The corresponding root url
 * @author 		Olivier Bossel <olivier.bossel@gmail.com>
 */
function t_root_path($slug = '') {
    return t_tailslash(T_ROOT_PATH) . ltrim($slug, '/');
}