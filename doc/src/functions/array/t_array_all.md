# t_array_all

Returns true if the provided function returns true for all elements of an array, false otherwise


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$items  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to process  |  required  |
$func  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The function to call on each item  |  required  |

### Example
```php
	if (Thorin::array_all([1,2,3,4], function($item) {
  return $item < 10;
})) {
   // do something
}
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/appzcoder/30-seconds-of-php-code](https://github.com/appzcoder/30-seconds-of-php-code)