# array_difference_with

This method is like `Thorin::array_difference` except that it accepts `comparator`
which is invoked to compare elements of `array` to `values`. The order and
references of result values are determined by the first array. The comparator
is invoked with two arguments: (arrVal, othVal).

**Note:** Unlike `Thorin::pull_all_with`, this method returns a new array.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to inspect  |  required  |
...$values  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The values to exclude  |  required  |
$comparator  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The comparator invoked per element  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The new array of filtered values

### Example
```php
	Thorin::array_difference_with(
  [[ 'x' => 1, 'y' => 2 ], [ 'x' => 2, 'y' => 1 ]],
  [[ 'x' => 1, 'y' => 2 ]],
  'Thorin::is_equal'
);
// [[ 'x' => 2, 'y' => 1 ]]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/differenceWith.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/differenceWith.php)