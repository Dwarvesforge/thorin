# array_union_by

This method is like `Thorin::array_union` except that it accepts `iteratee` which is
invoked for each element of each `arrays` to generate the criterion by
which uniqueness is computed. Result values are chosen from the first
array in which the value occurs. The iteratee is invoked with one argument:
(value).



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
...$arrays  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The arrays to inspect  |  required  |
$iteratee  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The iteratee invoked per element  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The new array of combined values

### Example
```php
	Thorin::array_union_by([2.1], [1.2, 2.3], 'floor');
// [2.1, 1.2]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/unionBy.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/unionBy.php)