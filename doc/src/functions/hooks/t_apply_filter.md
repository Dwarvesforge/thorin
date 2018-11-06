# t_apply_filters

Call the functions added to a filter hook.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$name  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The name of the filter hook  |  required  |
$value  |  **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }**  |  The value on which the filters hooked to `$name` are applied on  |  required  |
$var...  |  **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }**  |  Additional variables passed to the functions hooked to `$name`  |  required  |

Return **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }** The filtered value after all hooked functions are applied to it

### Example
```php
	Thorin::add_filter('my-filter', function($value) {
  return 'Hello ' . $value;
});
print Thorin::apply_filters('my-filter', 'world'); // Hello world
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://packagist.org/packages/voku/php-hooks](https://packagist.org/packages/voku/php-hooks)