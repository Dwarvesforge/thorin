<?php

/**
 * Return a url relative to the `app.ASSETS_PATH` and the `app.ROOT_URL` config
 *
 * @param       {String}        $slug       The asset slug to get
 * @return      {String}                    The corresponding asset uri
 * @author 		Olivier Bossel <olivier.bossel@gmail.com>
 */
function t_asset_url($slug) {

	// need to strip the `paths.DOCUMENT_ROOT` part from the `app.ASSET_PATH` to get the
	// wanted path relative to the `paths.DOCUMENT_ROOT` one
	$pathRelativeToTDocumentRoot = str_replace(Thorin::sanitize_path(Thorin::config('paths.DOCUMENT_ROOT')), '', Thorin::sanitize_path(Thorin::config('paths.ASSETS')));
	$path = Thorin::tailslash(Thorin::config('app.ROOT_URL')) . ltrim(Thorin::tailslash($pathRelativeToTDocumentRoot), '/') . ltrim($slug, '/');

	return Thorin::sanitize_url($path);
}
