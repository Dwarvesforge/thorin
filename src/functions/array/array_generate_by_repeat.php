<?php

namespace thorin;

/**
 * Generate an array using a function called n times
 * @param    {Callable}    $func    The function to call to generate each item
 * @param    {Integer}     $count    The number of times to call the function
 *
 * @example    php
 * Thorin::array_generate_by_repeate(function() {
 * 	return rand(0, 20);
 * }, 5);
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function array_generate_by_repeat(callable $func, $count) {
	$return = [];
	for ($i = 0; $i < $count; $i++) {
		array_push($return, $func());
	}
	return $return;
}
