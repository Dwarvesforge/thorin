# $t_configs

Get or set a configuration depending on the arguments passed


Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$path  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The configuration path to get  |  required  |
$value  |  **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }**  |  The value to set  |  required  |

### Example
```php
	print Thorin::config('app.environment');
```
Author : Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)

Default : **[]**