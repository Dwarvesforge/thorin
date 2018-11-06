# t_csrf_token

Return the token for the given name, or the default token if no name is provided


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$name  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The name of the token to retreive  |  optional  |  CSRF::TOKEN_NAME

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The token retrieved

### Example
```php
	$token = Thorin::csrf_token();
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://packagist.org/packages/volnix/csrf](https://packagist.org/packages/volnix/csrf)