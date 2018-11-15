<?php

/**
 * Make sure the passed string has a slash at the begining
 *
 * @param   {String}    $string     The string to process
 * @return  {String}                The string with a slash at the begining
 * @author 		Olivier Bossel <olivier.bossel@gmail.com>
 */
function t_str_headslash($string) {
    return '/' . ltrim($string, '/');
}
