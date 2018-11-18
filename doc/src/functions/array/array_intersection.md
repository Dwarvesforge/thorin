# array_intersection

Creates an array of unique values that are included in all given arrays
using [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
for equality comparisons. The order and references of result values are
determined by the first array.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
...$arrays  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The arrays to process  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The new array of intersecting values

### Example
```php
	Thorin::array_intersection([2, 1], [2, 3]);
// [2]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/intersection.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/intersection.php)