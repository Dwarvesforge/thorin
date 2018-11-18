# array_difference_by

This method is like `array_difference` except that it accepts `iteratee` which
is invoked for each element of `array` and `values` to generate the criterion
by which they're compared. The order and references of result values are
determined by the first array. The iteratee is invoked with one argument:
(value).

**Note:** Unlike `array_pull_all_by`, this method returns a new array.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to inspect  |  required  |
...$values  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The values to exclude  |  required  |
$iteratee  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The iteratee invoked per element  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The new array of filtered values

### Example
```php
	Thorin::array_difference_by([2.1, 1.2], [2.3, 3.4], 'floor');
// [1.2]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/differenceBy.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/differenceBy.php)