# t_db

Return eloquent capsule manager [Illuminate\Database\Capsule\Manager](https://laravel.com/api/5.6/Illuminate/Database/Capsule/Manager.html) instance of the requested connection


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$connection  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The connection name requested. If not passed, will take the db.default config.  |  optional  |  null

Return **{ Illuminate\Database\Capsule\Manager }** An eloquent capsule manager instance to work with

### Example
```php
	$db = Thorin::db('mysql');
$users = $db->table('users')->get();
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com)