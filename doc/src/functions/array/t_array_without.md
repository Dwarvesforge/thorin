# t_array_without

Filters out the elements of an array, that have one of the specified values.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$item  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to process  |  required  |
$params...  |  **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }**  |  The values to exclude from the array  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The newly filtered array

### Example
```php
	Thorin::array_without([1,2,3,4,5], 1, 3);
// [2,4,5]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/appzcoder/30-seconds-of-php-code](https://github.com/appzcoder/30-seconds-of-php-code)