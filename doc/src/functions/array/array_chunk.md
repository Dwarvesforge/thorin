# array_chunk

Chunks an array into smaller arrays of a specified size


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$items  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to process  |  required  |
$size  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The size to chunk the array with  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** An array of smaller arrays

### Example
```php
	Thorin::array_chunk([1,2,3,4,5], 2);
// [[1, 2], [3, 4], [5]]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/appzcoder/30-seconds-of-php-code](https://github.com/appzcoder/30-seconds-of-php-code)