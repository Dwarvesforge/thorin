# array_take

Returns an array with n elements taken from the beginning


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$items  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array from which to take items  |  required  |
$n  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  How many items to take  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The taken items

### Example
```php
	Thorin::array_take([1,2,3,4,5], 2);
// [1,2]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/appzcoder/30-seconds-of-php-code](https://github.com/appzcoder/30-seconds-of-php-code)