<?php

/**
 * Return the root website url depending on the `paths.document_root` config
 *
 * @param       {String}        $slug       An optional slug to add to the root url
 * @param 		{Boolean} 		[$from_server_root=false] 		If returned path need to be relative to the server root or to the `paths.DOCUMENT_ROOT` config
 * @return      {String}                    The corresponding root url
 * @author 		Olivier Bossel <olivier.bossel@gmail.com>
 */
function t_root_path($slug = '') {
	// remove the root path to be sure we don't sens back
	// a path from the server root if it's not the wanted behavior
	$slug = str_replace(Thorin::sanitize_path(Thorin::config('paths.document_root')), '', $slug);
	return Thorin::sanitize_path(Thorin::config('paths.document_root')) . ltrim($slug, '/');
}
