# t_config_set

Set a configuration value


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$path  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The configuration path to set  |  required  |
$value  |  **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }**  |  The value to set  |  required  |

### Example
```php
	Thorin::config_set('app.my-cool-config', 'something cool');
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)