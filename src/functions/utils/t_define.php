<?php

/**
 * @name    t_define
 * Define a constant if not already defined
 *
 * @param      {String}         $name       The constant name
 * @param       {Mixed}         $value      The value to set
 */
function t_define($name, $value) {
    $name = strtoupper($name);
    if ( ! defined($name)) {
		define($name, $value);
	}
}