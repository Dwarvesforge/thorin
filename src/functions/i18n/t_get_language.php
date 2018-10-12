<?php
/**
 * Return the two character language code found in the browser language or in
 * a $_GET parameter using the $gerParam variable name.
 *
 * @param    {Array}    [$available=T_AVAILABLE_LANGUAGES]    An array of available languages (ex: ['fr','en'])
 * @param    {String}    [$default=T_DEFAULT_LANGUAGE]    The default language if none is found
 * @param    {String}    [$getParam="lang"]    The name of the $_GET parameter to check for the language
 * @return    {String}    The two character language code found
 *
 * @example    php
 * $lang = Thorin::get_language(['en','fr'], 'en');
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function t_get_language($available = T_AVAILABLE_LANGUAGES, $default = T_DEFAULT_LANGUAGE, $getParam = 'lang') {
	// get the browser language:
	$browserLanguage = Thorin::get_browser_language();
	// check if a language is passed in the url
	// through $_GET parameter
	if (isset($_GET[$getParam])) {
		$lang = $_GET[$getParam];
	// otherwise, if a browser language exist
	// we take that as lang
	} else if ($browserLanguage) {
		$lang = $browserLanguage;
	// otherwise, we take the default language as lang
	} else {
		$lang = $default;
	}
	// we check that the lang is available in the $available stack
	// and we return it
	return in_array($lang, $available) ? $lang : $default;
}
