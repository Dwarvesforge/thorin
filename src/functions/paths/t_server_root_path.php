<?php

/**
 * Return the passed path relative to the server root folder
 *
 * @param       {String}        $slug       An optional slug to add to the root url
 * @return      {String}                    The corresponding server root path
 * @author 		Olivier Bossel <olivier.bossel@gmail.com>
 */
function t_server_root_path($slug = '') {
	$rootPath = t_sanitize_path($_SERVER['DOCUMENT_ROOT']);
	$slug = str_replace($rootPath, '', $slug);
	return t_tailslash($rootPath) . ltrim($slug,'/');
}
