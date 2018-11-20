# array_concat

Creates a new array concatenating `array` with any additional arrays
and/or values.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to concatenate  |  required  |
...$values  |  **{ [Array](http://php.net/manual/en/language.types.array.php) , [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }**  |  The values to concatenate  |  required  |

### Example
```php
	Thorin::array_concat([1], 2, [3], [[4]])
// [1, 2, 3, [4]]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/concat.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/concat.php)