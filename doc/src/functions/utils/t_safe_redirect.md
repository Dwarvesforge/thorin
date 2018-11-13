# t_safe_redirect

Redirect the user to a specific url. If the header redirect did not work, print a redirect in the html


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$url  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The url to redirect the user to  |  required  |
$exit  |  **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }**  |  Whether to stop the php script or not  |  optional  |  true

### Example
```php
	Thorin::safe_redirect('https://google.com');
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://www.jonasjohn.de/snippets/php/secure-redirect.htm](https://www.jonasjohn.de/snippets/php/secure-redirect.htm)