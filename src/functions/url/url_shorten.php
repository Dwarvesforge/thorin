<?php

namespace thorin;

/**
 * Shorten a url using the tinyurl service
 *
 * @param    {String}    $url    The url to shorten
 * @return    {String}    The short version of the url
 *
 * @example    php
 * Thorin::url_shorten('https://thorin.io');
 * // http://tinyurl.com/y9tcvddg
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function url_shorten($url) {
	$ch = curl_init();
	$timeout = 5;
	curl_setopt($ch,CURLOPT_URL,'http://tinyurl.com/api-create.php?url='.$url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}
