# t_csrf_validate

Validate a CSRF token in a passed stack like $_POST, $_GET, or an array.
By default it will validate the CSRF token in the $_POST stack.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$request_data  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The data in which to check the CSRF token validity. If not provided, will take the $_POST as default  |  optional  |  null
$name  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The token name to check  |  optional  |  CSRF::TOKEN_NAME

Return **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }** true if valid, false if not

### Example
```php
	if (Thorin::csrf_validate()) {
  // do something if valid
} else {
  // handle error
}
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://packagist.org/packages/volnix/csrf](https://packagist.org/packages/volnix/csrf)