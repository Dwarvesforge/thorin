# csrf_qs

Generate a CSRF query string


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$name  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The token name  |  optional  |  CSRF::TOKEN_NAME

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The query string generated

### Example
```php
	$myQueryString = Thorin::csrf_qs();
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://packagist.org/packages/volnix/csrf](https://packagist.org/packages/volnix/csrf)