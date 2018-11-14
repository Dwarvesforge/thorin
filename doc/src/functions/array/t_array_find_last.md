# t_array_find_last

Returns the last element for which the provided function returns a truthy value.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$items  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to process  |  required  |
$func  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The test function to call on each item  |  required  |

Return **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }** The last element that pass the test function

### Example
```php
	Thorin::array_find_last([1, 2, 3, 4], function($item) {
  return ($n % 2) === 1;
});
// 3
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/appzcoder/30-seconds-of-php-code](https://github.com/appzcoder/30-seconds-of-php-code)