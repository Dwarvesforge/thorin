# t_array_flatten_depth

Recursively flatten `array` up to `depth` times.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to flatten  |  required  |
$depth  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The maximum recursion depth  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The new flattened array

### Example
```php
	$array = [1, [2, [3, [4]], 5]]
Thorin::array_flatten_depth($array, 1);
// [1, 2, [3, [4]], 5]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/flattenDepth.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/flattenDepth.php)