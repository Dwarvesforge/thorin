# t_array_slice

Creates a slice of `array` from `start` up to, but not including, `end`.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to process  |  required  |
$start  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The start position  |  required  |
$end  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The end position  |  required  |

### Example
```php
	$array = [1,2,3,4,5];
Thorin::array_slide($array, 1, 3);
// [2,3,4]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/slice.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/slice.php)