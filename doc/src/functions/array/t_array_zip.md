# t_array_zip

Creates an array of grouped elements, the first of which contains the
first elements of the given arrays, the second of which contains the
second elements of the given arrays, and so on.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
...$arrays  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The arrays to process  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The new array of grouped elements

### Example
```php
	Thorin::array_zip(['a', 'b'], [1, 2], [true, false]);
// [['a', 1, true], ['b', 2, false]]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/zip.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/zip.php)