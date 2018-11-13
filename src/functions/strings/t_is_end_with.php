<?php

/**
 * Check if the passed string end with the other passed string
 * @param    {String}    $source    The source string to check
 * @param    {String}    $with    The "with" string to check
 * @return    {Boolean}    true if end with, false if not
 *
 * @example    php
 * if (Thorin::is_end_with($myText, 'world')) {
 *   // do something here
 * }
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function t_is_end_with($source, $with) {
	return strrpos($source, $with) === strlen($source)-strlen($with);
}
