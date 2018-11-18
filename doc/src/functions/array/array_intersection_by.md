# array_intersection_by

This method is like `Thorin::array_intersection` except that it accepts `iteratee`
which is invoked for each element of each `arrays` to generate the criterion
by which they're compared. The order and references of result values are
determined by the first array. The iteratee is invoked with one argument:
(value).



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
...$arrays  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The arrays to process  |  required  |
$iteratee  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The iteratee invoked per element  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The new array of intersecting values

### Example
```php
	Thorin::array_intersection_by([2.1, 1.2], [2.3, 3.4], Math.floor);
// [2.1]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/intersectionBy.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/intersectionBy.php)