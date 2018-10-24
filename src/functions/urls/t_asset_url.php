<?php

/**
 * Return a url relative to the `app.ASSETS_PATH` and the `app.ROOT_URL` config
 *
 * @param       {String}        $slug       The asset slug to get
 * @param  		{Boolean} 		[$include_domain=false] 	If want the fully qualified domain in the url
 * @return      {String}                    The corresponding asset url
 * @author 		Olivier Bossel <olivier.bossel@gmail.com>
 */
function t_asset_url($slug, $include_domain = false) {

	// need to strip the `paths.DOCUMENT_ROOT` part from the `app.ASSET_PATH` to get the
	// wanted path relative to the `paths.DOCUMENT_ROOT` one
	$pathRelativeToTDocumentRoot = str_replace(Thorin::sanitize_path(Thorin::config('paths.DOCUMENT_ROOT')), '', Thorin::sanitize_path(Thorin::config('paths.ASSETS')));
	if ($include_domain) {
		$path = Thorin::tailslash(Thorin::config('app.ROOT_URL')) . ltrim(Thorin::tailslash($pathRelativeToTDocumentRoot), '/') . ltrim($slug, '/');
	} else {
		$path = Thorin::headslash(Thorin::tailslash($pathRelativeToTDocumentRoot)) . ltrim($slug, '/');
	}
	return Thorin::sanitize_url($path);
}
