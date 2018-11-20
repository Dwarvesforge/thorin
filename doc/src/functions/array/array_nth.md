# array_nth

Gets the element at index `n` of `array`. If `n` is negative, the nth
element from the end is returned.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to inspect  |  required  |
$n  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The index of the element to return  |  required  |

Return **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }** The nth element of `array`

### Example
```php
	Thorin::array_nth(['a', 'b', 'c', 'd'], 2);
// b
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/nth.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/nth.php)