# t_array_difference

Creates an array of `array` values not included in the other given arrays
using [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
for equality comparisons. The order and references of result values are
determined by the first array.

**Note:** Unlike `Thorin::array_pullAll`, this method returns a new array.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to inspect  |  required  |
...$values  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The values to exclude  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The new array of filtered values

### Example
```php
	Thorin::array_difference([2, 1], [2, 3]);
// [1]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/difference.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/difference.php)