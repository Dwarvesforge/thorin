# array_deep_flatten

Deep flattens an array


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$items  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to flatten  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The flatten array

### Example
```php
	Thorin::array_deep_flatten([1, [2], [[3], 4], 5]);
// [1, 2, 3, 4, 5]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/appzcoder/30-seconds-of-php-code](https://github.com/appzcoder/30-seconds-of-php-code)