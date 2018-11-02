# t_csrf_input

Generate a CSRF input hidden field


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$name  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The token name  |  optional  |  CSRF::TOKEN_NAME

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The input generated

### Example
```php
	$myInput = Thorin::csrf_input();
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)