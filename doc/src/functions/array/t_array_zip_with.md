# t_array_zip_with

This method is like `Thorin::array_zip` except that it accepts `iteratee` to specify
how grouped values should be combined. The iteratee is invoked with the
elements of each group: (...group).



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
...$arrays  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The arrays to process  |  required  |
$iteratee  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The function to combine grouped values  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** the new array of grouped elements

### Example
```php
	Thorin::array_zip_with([1, 2], [10, 20], [100, 200], function($a, $b, $c) { return $a + $b + $c; });
// [111, 222]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/zipWith.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/zipWith.php)