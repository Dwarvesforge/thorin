<?php

/**
 * Return a url relative to the `app.ASSETS_PATH` and the `app.ROOT_URL` config
 *
 * @param       {String}        $slug       The asset slug to get
 * @return      {String}                    The corresponding asset uri
 * @author 		Olivier Bossel <olivier.bossel@gmail.com>
 */
function t_asset_url($slug) {

	// need to strip the `app.ROOT_PATH` part from the `app.ASSET_PATH` to get the
	// wanted path relative to the `app.ROOT_PATH` one
	$pathRelativeToTDocumentRoot = str_replace(t_sanitize_path(Thorin::config('app.ROOT_PATH')), '', t_sanitize_path(Thorin::config('assets.ASSETS_PATH')));
	$path = t_tailslash(Thorin::config('app.ROOT_URL')) . ltrim(t_tailslash($pathRelativeToTDocumentRoot), '/') . ltrim($slug, '/');

	return t_sanitize_url($path);
}
