<?php

/**
 * @name    t_asset_path
 * Return a path relative to the S_ASSETS_PATH and constant config
 *
 * @param       {String}        $slug       The asset slug to get
 * @return      {String}                    The corresponding asset path like /dist/my-cool-file.jpg
 * @author 		Olivier Bossel <olivier.bossel@gmail.com>
 */
function t_asset_path($slug) {
	$slug = str_replace($_SERVER['DOCUMENT_ROOT'], '', $slug);
    return t_tailslash(T_ASSETS_PATH) . ltrim($slug, '/');
}
