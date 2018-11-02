<?php
/**
 * Return eloquent capsule manager [Illuminate\Database\Capsule\Manager](https://laravel.com/api/5.6/Illuminate/Database/Capsule/Manager.html) instance of the requested connection
 * @param    {String}    [$connection=null]    The connection name requested. If not passed, will take the db.default config.
 * @return    {Illuminate\Database\Capsule\Manager}    An eloquent capsule manager instance to work with
 *
 * @example    php
 * $db = Thorin::db('mysql');
 * $users = $db->table('users')->get();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com>
 */
function t_db($connection = null) {
	return Thorin::db_factory($connection);
}
