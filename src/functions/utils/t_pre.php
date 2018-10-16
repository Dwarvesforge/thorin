<?php

/**
 * Format/beautify array
 *
 * @param       {Array}        $array         The array to be beautify
 * @return    {String}    The beautified array version
 *
 * @example    php
 * print Thorin::pre($myArray);
 *
 * @author 		Olivier Bossel <olivier.bossel@gmail.com>
 */
function t_pre($array) {
	return "<pre>" . print_r($array, true) . "</pre>";
}
