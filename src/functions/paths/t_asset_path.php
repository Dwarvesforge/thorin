<?php

/**
 * Return a path relative to the `paths.ASSETS` and `paths.DOCUMENT_ROOT` config
 *
 * @param       {String}        $slug       The asset slug to get
 * @param 		{Boolean} 		[$from_server_root=false] 		If returned path need to be relative to the server root or to the 'paths.DOCUMENT_ROOT' config
 * @return      {String}                    The corresponding asset path like /dist/my-cool-file.jpg
 * @author 		Olivier Bossel <olivier.bossel@gmail.com>
 */
function t_asset_path($slug) {
	return  Thorin::sanitize_path(Thorin::config('paths.ASSETS')) . ltrim($slug, '/');
}
