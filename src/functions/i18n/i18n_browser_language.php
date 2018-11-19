<?php

namespace thorin;

/**
 * Return the browser language if exist, otherwise, return false
 *
 * @return    {String|Boolean}    The language if found, false if not
 *
 * @example    php
 * $lang = Thorin::i18n_browser_language();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function i18n_browser_language() {
	$lang = false;
	if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	}
	return $lang;
}
