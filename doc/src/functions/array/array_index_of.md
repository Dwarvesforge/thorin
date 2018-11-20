# array_index_of

Gets the index at which the first occurrence of `value` is found in `array`
using [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
for equality comparisons. If `fromIndex` is negative, it's used as the
offset from the end of `array`.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to inspect  |  required  |
$value  |  **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }**  |  The value to search for  |  required  |
$fromIndex  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The index to search from  |  optional  |  null

Return **{ [Integer](http://php.net/manual/en/language.types.integer.php) }** The index of the matched value, otherwise -1

### Example
```php
	Thorin::array_index_of([1, 2, 1, 2], 2);
// 1
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/indexOf.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/indexOf.php)