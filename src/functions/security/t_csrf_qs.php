<?php
use \Volnix\CSRF\CSRF;

/**
 * Generate a CSRF query string
 * @param    {String}    [$name=CSRF::TOKEN_NAME]    The token name
 * @return    {String}    The query string generated
 *
 * @example    php
 * $myQueryString = Thorin::csrf_qs();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function t_csrf_qs($name = CSRF::TOKEN_NAME) {
	return CSRF::getQueryString($name);
}
