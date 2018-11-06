# t_db_connection_factory

Return eloquent connection [Illuminate\Database\Connection](https://laravel.com/api/5.3/Illuminate/Database/Connection.html) instance of the requested connection


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$connection  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The connection name requested. If not passed, will take the db.default_connection config.  |  optional  |  null

Return **{ Illuminate\Database\Connection }** An eloquent connection instance to work with

### Example
```php
	$db = Thorin::db_connection_factory('mysql');
$users = $db->table('users')->get();
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com)