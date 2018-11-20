# array_find_last_index

Returns the index of the last element for which the provided function returns a truthy value.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$items  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to process  |  required  |
$fund  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The test function to run on every items  |  required  |

Return **{ [Integer](http://php.net/manual/en/language.types.integer.php) }** The index of the last element for which the provided function returns a truthy value.

### Example
```php
	Thorin::array_find_last_index([1, 2, 3, 4], function($n) {
  return ($n % 2) === 1;
});
// 2
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/appzcoder/30-seconds-of-php-code#findlastindex](https://github.com/appzcoder/30-seconds-of-php-code#findlastindex)