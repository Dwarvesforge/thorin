# hook_add_filter

Hooks a function or method to a specific filter action.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$name  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The name of the filter to hook the $callback to  |  required  |
$callback  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The name of/or the function to be called when the filter is applied  |  required  |
$priority  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  Used to specify the order in which the functions associated with a particular action are executed (default: 10). Lower numbers correspond with earlier execution, and functions with the same priority are executed in the order in which they were added to the action.  |  optional  |  10
$accepted_args  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The number of arguments the function accept (default 1)  |  optional  |  1

Return **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }** true

### Example
```php
	Thorin::hook_add_filter('my-filter', function($value) {
  return 'Hello ' . $value;
});
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://packagist.org/packages/voku/php-hooks](https://packagist.org/packages/voku/php-hooks)