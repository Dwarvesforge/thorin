# array_max

Computes the maximum value of `array`. If `array` is empty or falsey, null is returned.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to iterate over  |  required  |

Return **{ [Integer](http://php.net/manual/en/language.types.integer.php) , null }** The maximum value

### Example
```php
	Thorin::array_max([4, 2, 8, 6]);
// 8
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Math/max.php](https://github.com/lodash-php/lodash-php/blob/master/src/Math/max.php)