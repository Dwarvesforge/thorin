# t_array_take_right

Creates a slice of `array` with `n` elements taken from the end.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to process  |  required  |
$n  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The number of elements to take  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The slice of `array`

### Example
```php
	Thorin::array_take_right([1, 2, 3], 2);
// [2,3]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/takeRight.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/takeRight.php)