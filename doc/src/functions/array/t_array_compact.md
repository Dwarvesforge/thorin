# t_array_compact

Creates an array with all falsey values removed. The values `false`, `null`,
`0`, `""`, `undefined`, and `NaN` are falsey.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to compact  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The new array of filtered values

### Example
```php
	Thorin::array_compact([0, 1, false, 2, '', 3]);
// [1, 2, 3]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/compact.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/compact.php)