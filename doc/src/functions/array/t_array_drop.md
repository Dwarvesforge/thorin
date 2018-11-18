# t_array_drop

Returns a new array with n elements removed from the left


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$items  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to process  |  required  |
$n  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  How many items to drop  |  optional  |  1

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The new array produced

### Example
```php
	Thorin::array_drop([1,2,3], 2) // [3]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/appzcoder/30-seconds-of-php-code](https://github.com/appzcoder/30-seconds-of-php-code)