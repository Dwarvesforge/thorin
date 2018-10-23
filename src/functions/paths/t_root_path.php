<?php

/**
 * Return the root website url depending on the `paths.DOCUMENT_ROOT` config
 *
 * @param       {String}        $slug       An optional slug to add to the root url
 * @param 		{Boolean} 		[$from_server_root=false] 		If returned path need to be relative to the server root or to the `paths.DOCUMENT_ROOT` config
 * @return      {String}                    The corresponding root url
 * @author 		Olivier Bossel <olivier.bossel@gmail.com>
 */
function t_root_path($slug = '', $from_server_root = false) {

	// remove the root path to be sure we don't sens back
	// a path from the server root if it's not the wanted behavior
	$slug = str_replace(t_sanitize_path(Thorin::config('paths.DOCUMENT_ROOT')), '', $slug);

	// if the path wanted is from the server root,
	// append that to the begining of the passed slug
	if ($from_server_root) {
		return t_sanitize_path(Thorin::config('paths.DOCUMENT_ROOT')) . ltrim($slug, '/');
	} else {
		// need to strip the `paths.DOCUMENT_ROOT` part from the `app.ASSET_PATH` to get the
		// wanted path relative to the `paths.DOCUMENT_ROOT` one
		return '/' . ltrim($slug, '/');
	}
}
