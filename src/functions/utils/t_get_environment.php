<?php
/**
 * Return the environment set in T_ENVIRONMENT constant
 * @return    {String}    The environment
 *
 * @example    php
 * $env = Thorin::get_environment();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function t_get_environment() {
	// try to get the environment from environment variables
	return T_ENVIRONMENT;
}
