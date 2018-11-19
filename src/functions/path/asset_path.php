<?php

namespace thorin;

/**
 * Return a path relative to the `path.assets` config
 *
 * @param       {String}        $slug       The asset slug to get
 * @param 		{Boolean} 		[$from_server_root=false] 		If returned path need to be relative to the server root or to the 'path.document_root' config
 * @return      {String}                    The corresponding asset path like /dist/my-cool-file.jpg
 * @author 		Olivier Bossel <olivier.bossel@gmail.com>
 */
function asset_path($slug) {
	return  \Thorin::sanitize_path(\Thorin::config('path.assets')) . ltrim($slug, '/');
}
