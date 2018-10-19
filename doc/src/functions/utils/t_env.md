# t_env

Return the environment variable that correspond to the requested one or a default value passed as a second parameter


Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$name  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The name of the environment variable to get  |  required  |
$default  |  **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }**  |  The value to return if the environment variable does not exist  |  optional  |  null

### Example
```php
	$myValue = Thorin::env('MY_VARIABLE', false);
```
Author : Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)