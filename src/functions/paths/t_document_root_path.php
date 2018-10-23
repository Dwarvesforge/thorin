<?php

/**
 * Return the root website url depending on the `paths.DOCUMENT_ROOT` config
 *
 * @param       {String}        $slug       An optional slug to add to the root url
 * @param 		{Boolean} 		[$from_server_root=false] 		If returned path need to be relative to the server root or to the `paths.DOCUMENT_ROOT` config
 * @return      {String}                    The corresponding root url
 * @author 		Olivier Bossel <olivier.bossel@gmail.com>
 */
function t_document_root_path($slug = '', $from_server_root = false) {
	return Thorin::root_path($slug, $from_server_root);
}
