# t_db_connection_config

Return a db connection configuration array


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$name  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The name of the db connection wanted. If not specified will take the db.default_connection config  |  optional  |  null

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The db connection configuration

### Example
```php
	$config = Thorin::db_connection_config('db1');
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)