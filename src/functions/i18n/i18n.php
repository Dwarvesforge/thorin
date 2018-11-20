<?php

namespace thorin;

/**
 * Return a value from the lang files. First part of the path define the file to pick the language string from.
 * Exemple : `newsletter.title` will load the `newsletter` file and search for the `title` inside.
 * @param    {String}    $path    The doted path relative to the root of the lang file to get the value from
 * @param    {String}    [$lang=null]    The language in which you want the value. If not set, will be getted using the t_get_language function depending on your configuration
 *
 * @example    php
 * $myCoolString = Thorin::i18n('newsletter.title');
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function i18n($path, $lang = null) {
	// if no lang is passed as parameter,
	// get it with the t_language function using
	// the config
	if ($lang == null) {
		$lang = \Thorin::i18n_language();
	}
	// split the path using the . as separator
	$splits = explode('.', $path);
	// file to load is the first value in the splits stack
	$filename = array_shift($splits);
	// build the language file path
	$langFilePath = \Thorin::path_sanitize(\Thorin::config('path.lang')) . $lang . '/' . $filename . '.php';
	// check if this file does not exist to throw an exception
	if (!file_exists($langFilePath)) {
		throw new \Exception('The language file "' . $langFilePath . '" does not exist...');
	}
	// load this file
	$languages = require($langFilePath);
	// transform the dot path to an array like one
	$path = implode("']['", $splits);
	$path = "['".$path."']";
	// return the value from the languages stack
	return eval('return $languages'.$path.';');
}