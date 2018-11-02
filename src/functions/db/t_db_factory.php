<?php
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
$t_dbs = [];

/**
 * Return eloquent capsule manager [Illuminate\Database\Capsule\Manager](https://laravel.com/api/5.6/Illuminate/Database/Capsule/Manager.html) instance of the requested connection
 * @param    {String}    [$connection=null]    The connection name requested. If not passed, will take the db.default config.
 * @param    {Boolean}    [$forceNewConnection=false]    If want to force a new connection or get the one in cache
 * @return    {Illuminate\Database\Capsule\Manager}    An eloquent capsule manager instance to work with
 *
 * @example    php
 * $db = Thorin::db_factory('mysql');
 * $users = $db->table('users')->get();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com>
 */
function t_db_factory($connection = null, $forceNewConnection = false) {
	global $t_dbs;
	// get the default db if not passed
	if ( ! $connection) {
		return Thorin::db_factory(Thorin::config('db.default'), $forceNewConnection);
	}
	// make sure the driver passed in in lowercase
	if ($connection) $connection = strtolower($connection);
	// check if a pool already exist with this driver
	if ( ! $forceNewConnection && isset($t_dbs[$connection])) {
		// return the cached pool
		return $t_dbs[$connection];
	}
	// get the db configuration
	$config = Thorin::db_config($connection);
	// handle no config
	if ( ! $config) {
		throw new Exception('The db connection "'.$connection.'" does not exist');
	}
	// init the eloquent ORM
	$capsule = new Capsule;
	$capsule->addConnection($config);
	$capsule->setEventDispatcher(new Dispatcher(new Container));
	$capsule->bootEloquent();
	$capsule->setAsGlobal();
	// save db in stack to avoid creating multiple db of the same name
	$t_dbs[$connection] = $capsule;
	// return the new db connection
	return $capsule;
}
