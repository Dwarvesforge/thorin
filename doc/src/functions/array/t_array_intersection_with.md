# t_array_intersection_with

This method is like `Thorin::array_intersection` except that it accepts `comparator`
which is invoked to compare elements of `arrays`. The order and references
of result values are determined by the first array. The comparator is
invoked with two arguments: (arrVal, othVal).



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
...$arrays  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The arrays to process  |  required  |
$comparator  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The comparator invoked per element  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The new array of intersecting values

### Example
```php
	$objects = [[ 'x' => 1, 'y' => 2 ], [ 'x' => 2, 'y' => 1 ]]
$others = [[ 'x' => 1, 'y' => 1 ], [ 'x' => 1, 'y' => 2 ]]
Thorin::array_intersection_with($objects, $others, 'Thorin::is_equal');
// [[ 'x' => 1, 'y' => 2 ]]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/intersectionWith.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/intersectionWith.php)