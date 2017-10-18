<?php

/**
 * @name    t_root_url
 * Return the root website url depending on the T_ROOT_URL
 *
 * @param       {String}        $slug       An optional slug to add to the root url
 * @return      {String}                    The corresponding root url
 * @author 		Olivier Bossel <olivier.bossel@gmail.com>
 */
function t_root_url($slug = '') {
    return t_tailslash(T_ROOT_URL) . ltrim($slug, '/');
}