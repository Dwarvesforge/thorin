# t_array_union

Creates an array of unique values, in order, from all given arrays using
[`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
for equality comparisons.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
...$arrays  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The arrays to inspect  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The new array of combined values

### Example
```php
	Thorin::array_union([2], [1, 2]);
// [2, 1]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/union.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/union.php)