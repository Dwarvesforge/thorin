<?php

/**
 * @name    t_server_root_path
 * Return the passed path relative to the server root folder
 *
 * @param       {String}        $slug       An optional slug to add to the root url
 * @return      {String}                    The corresponding server root path
 * @author 		Olivier Bossel <olivier.bossel@gmail.com>
 */
function t_server_root_path($slug = '') {
	$slug = str_replace($_SERVER['DOCUMENT_ROOT'], '', $slug);
	return t_tailslash($_SERVER['DOCUMENT_ROOT']) . ltrim($slug,'/');
}
