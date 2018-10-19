<?php

/**
 * Return the root website url depending on the `app.ROOT_URL` config
 *
 * @param       {String}        $slug       An optional slug to add to the root url
 * @return      {String}                    The corresponding root url
 * @author 		Olivier Bossel <olivier.bossel@gmail.com>
 */
function t_root_url($slug = '') {
	$url = t_tailslash(rtrim(Thorin::config('app.ROOT_URL'),'/')) . ltrim($slug, '/');
	return t_sanitize_url($url);
}
