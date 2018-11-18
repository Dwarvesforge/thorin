# array_flatten_deep

Recursively flattens `array`.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to flatten  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The new flattened array

### Example
```php
	Thorin::array_flatten_deep([1, [2, [3, [4]], 5]]);
// [1, 2, 3, 4, 5]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/flattenDeep.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/flattenDeep.php)