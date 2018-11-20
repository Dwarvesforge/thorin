# array_shuffle

Creates an array of shuffled values



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to shuffle  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The new shuffled array

### Example
```php
	Thorin::array_shuffle([1, 2, 3, 4]);
// [4, 1, 3, 2]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Collection/shuffle.php](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/shuffle.php)