# t_db_config

Return a db configuration array


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$name  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The name of the db wanted. If not specified will take the db.default_db config  |  optional  |  null

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The db configuration

### Example
```php
	$db = Thorin::db_config('db1');
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)