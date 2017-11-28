<?php

/**
 * @name    t_server_root_path
 * Return the root website url depending on the T_server_ROOT_PATH config
 *
 * @param       {String}        $slug       An optional slug to add to the root url
 * @return      {String}                    The corresponding root url
 * @author 		Olivier Bossel <olivier.bossel@gmail.com>
 */
function t_server_root_path($slug = '') {
	$slug = str_replace($_SERVER['DOCUMENT_ROOT'], '', $slug);
	return t_tailslash($_SERVER['DOCUMENT_ROOT']) . ltrim($slug,'/');
}
