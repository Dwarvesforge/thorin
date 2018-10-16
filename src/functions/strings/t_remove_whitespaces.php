<?php
/**
 * Remove all whitespaces in the passed string
 * @param    {String}    $string    The string to process
 * @return    {String}    The processed string
 *
 * @example    php
 * $whitespaceFree = Thorin::remove_whitespaces('hello world');
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function t_remove_whitespaces($string) {
	return preg_replace('/\s+/', '', $string);
}
