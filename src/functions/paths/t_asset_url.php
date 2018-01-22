<?php

/**
 * Return a url relative to the T_ASSETS_PATH and the T_ROOT_URL constant config
 *
 * @param       {String}        $slug       The asset slug to get
 * @return      {String}                    The corresponding asset uri
 * @author 		Olivier Bossel <olivier.bossel@gmail.com>
 */
function t_asset_url($slug) {
	$path = t_tailslash(T_ROOT_URL) . t_tailslash(T_ASSETS_PATH) . ltrim($slug, '/');
	return t_sanitize_url($path);
}
