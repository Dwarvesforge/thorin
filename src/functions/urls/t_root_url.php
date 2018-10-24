<?php

/**
 * Return the root website url depending on the `app.ROOT_URL` config
 *
 * @param       {String}        $slug       An optional slug to add to the root url
 * @param  		{Boolean} 		[$include_domain=false] 	If want the fully qualified domain in the url
 * @return      {String}                    The corresponding root url
 * @author 		Olivier Bossel <olivier.bossel@gmail.com>
 */
function t_root_url($slug = '', $include_domain = false) {
	if ($include_domain) {
		$url = Thorin::tailslash(rtrim(Thorin::config('app.ROOT_URL'),'/')) . ltrim($slug, '/');
	} else {
		$url = Thorin::headslash($slug);
	}
	return Thorin::sanitize_url($url);
}
