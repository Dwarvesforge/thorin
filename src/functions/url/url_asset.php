<?php

namespace thorin;

/**
 * Return a url relative to the `path.assets` and the `app.root_url` config
 *
 * @param       {String}        $slug       The asset slug to get
 * @param  		{Boolean} 		[$include_domain=false] 	If want the fully qualified domain in the url
 * @return      {String}                    The corresponding asset url
 *
 * @example    php
 * Thorin::url_asset('my/cool/image.jpg');
 * // /dist/my/cool/image.jpg
 *
 * Thorin::url_asset('my/cool/image.jpg', true);
 * // https://thorin.io/dist/my/cool/image.jpg
 *
 * @author 		Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function url_asset($slug, $include_domain = false) {
	// need to strip the `path.document_root` part from the `app.ASSET_PATH` to get the
	// wanted path relative to the `path.document_root` one
	$pathRelativeToTDocumentRoot = \str_replace(\Thorin::path_sanitize(\Thorin::config('path.document_root')), '', \Thorin::path_sanitize(\Thorin::config('path.assets')));
	if ($include_domain) {
		$path = \Thorin::str_tailslash(\Thorin::config('app.root_url')) . ltrim(\Thorin::str_tailslash($pathRelativeToTDocumentRoot), '/') . ltrim($slug, '/');
	} else {
		$path = \Thorin::str_headslash(\Thorin::str_tailslash($pathRelativeToTDocumentRoot)) . ltrim($slug, '/');
	}
	return \Thorin::url_sanitize($path);
}
