<?php
/**
 * Return the dotenv instance used to parse the .env file at the root of the project
 * @return    {DotEnv}    The dotenv instance
 *
 * @example    php
 * Thorin::dotenv()->require('MYVAR');
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function t_dotenv() {
	global $t_dotenv;
	return $t_dotenv;
}
