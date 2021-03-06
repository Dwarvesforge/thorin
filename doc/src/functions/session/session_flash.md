# session_flash

Get or set a value in session flash.
Flash mean that the value will live until the value is accessed. Then the value is killed.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$key  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The key name  |  required  |
$value  |  **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }**  |  The value to save  |  optional  |  null

Return **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }** The value stored in session

### Example
```php
	Thorin::session_flash('my-key', 'my value');
print Thorin::session_flash('my-key'); // my value
print Thorin::session_flash('my-key'); // null
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)