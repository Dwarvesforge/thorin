<?php

use \Volnix\CSRF\CSRF;

/**
 * Validate a CSRF token in a passed stack like $_POST, $_GET, or an array.
 * By default it will validate the CSRF token in the $_POST stack.
 *
 * @param    {Array}    [$request_data=null]    The data in which to check the CSRF token validity. If not provided, will take the $_POST as default
 * @param    {String}    [$name=CSRF::TOKEN_NAME]    The token name to check
 * @return    {Boolean}    true if valid, false if not
 *
 * @example    php
 * if (Thorin::csrf_validate()) {
 *   // do something if valid
 * } else {
 *   // handle error
 * }
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 * @see    https://packagist.org/packages/volnix/csrf
 */
function t_csrf_validate($request_data = null, $name = CSRF::TOKEN_NAME) {
	if ( ! $request_data) {
		$request_data = $_POST;
	}
	return CSRF::validate($request_data, $name);
}
