<?php

/**
 * Return a path relative to the `app.ASSETS_PATH` and `app.ROOT_PATH` config
 *
 * @param       {String}        $slug       The asset slug to get
 * @param 		{Boolean} 		[$from_server_root=false] 		If returned path need to be relative to the server root or to the 'app.ROOT_PATH' config
 * @return      {String}                    The corresponding asset path like /dist/my-cool-file.jpg
 * @author 		Olivier Bossel <olivier.bossel@gmail.com>
 */
function t_asset_path($slug, $from_server_root = false) {
	if ($from_server_root) {
		return  t_sanitize_path(Thorin::config('paths.ASSETS')) . ltrim($slug, '/');
	} else {
		// need to strip the Thorin::config('app.ROOT_PATH') part from the Thorin::config('app.ASSETS_PATH') to get the
		// wanted path relative to the Thorin::config('app.ROOT_PATH') one
		$pathRelativeToTDocumentRoot = str_replace(t_sanitize_path(Thorin::config('app.ROOT_PATH')), '', t_sanitize_path(Thorin::config('paths.ASSETS')));
		return '/' . ltrim(t_tailslash($pathRelativeToTDocumentRoot), '/') . ltrim($slug, '/');
	}
}
