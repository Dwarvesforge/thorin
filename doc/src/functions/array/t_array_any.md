# t_array_any

Returns true if the provided function returns true for at least one element of an array, false otherwise.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$items  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to process  |  required  |
$func  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The test function to run on each items  |  required  |

Return **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }** true if at least one item pass the test function, false if not

### Example
```php
	if (Thorin::array_any([1,10,15,20], function($item) {
  return $item < 10;
})) {
  // do something
}
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/appzcoder/30-seconds-of-php-code](https://github.com/appzcoder/30-seconds-of-php-code)