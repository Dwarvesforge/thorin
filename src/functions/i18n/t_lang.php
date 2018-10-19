<?php
/**
 * Return a value from the lang files.
 * @param    {String}    $path    The doted path relative to the root of the lang file to get the value from
 * @param    {String}    [$file="default"]    The lang filename in which to get the value from
 * @param    {String}    [$lang=null]    The language in which you want the value. If not set, will be getted using the t_get_language function depending on your configuration
 *
 * @example    php
 * $myCoolString = Thorin::lang('newsletter.title');
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function t_lang($path, $file = 'default', $lang = null) {
	// if no lang is passed as parameter,
	// get it with the t_get_language function using
	// the config constants
	if ($lang == null) {
		$lang = Thorin::get_language();
	}
	// build the language file path
	$langFilePath = Thorin::sanitize_path(Thorin::config('i18n.LANG_PATH')) . $lang . '/' . $file . '.php';
	// check if this file does not exist to throw an exception
	if (!file_exists($langFilePath)) {
		throw new Exception('The language file "' . $langFilePath . '" does not exist...');
	}
	// load this file
	$languages = require($langFilePath);
	// transform the dot path to an array like one
	$path = explode('.',$path);
	$path = implode("']['", $path);
	$path = "['".$path."']";
	// return the value from the languages stack
	return eval('return $languages'.$path.';');
}
