# t_array_uniq_by

This method is like `Thorin::array_uniq` except that it accepts `iteratee` which is
invoked for each element in `array` to generate the criterion by which
uniqueness is computed. The order of result values is determined by the
order they occur in the array. The iteratee is invoked with one argument:
(value).



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to inspect  |  required  |
$iteratee  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The iteratee invoked per element  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The new duplicate free array

### Example
```php
	Thorin::array_uniq_by([2.1, 1.2, 2.3], 'floor');
// [2.1, 1.2]
```
Author : Olivier Bossel [olivier.bosel@gmail.com](mailto:olivier.bosel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/uniqBy.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/uniqBy.php)