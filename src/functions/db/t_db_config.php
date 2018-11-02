<?php
/**
 * Return a db configuration array
 * @param    {String}    [$name=null]    The name of the db wanted. If not specified will take the db.default_db config
 * @return    {Array}    The db configuration
 *
 * @example    php
 * $db = Thorin::db_config('db1');
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function t_db_config($name = null) {
	if ($name === null) {
		$name = Thorin::config('db.default');
	}
	$name = strtolower($name);
	return Thorin::config('db.connections.' . $name);
}
