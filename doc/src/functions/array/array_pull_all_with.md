# array_pull_all_with

This method is like `Thorin::array_pull_all` except that it accepts `comparator` which
is invoked to compare elements of `array` to `values`. The comparator is
invoked with two arguments: (arrVal, othVal).



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to modify  |  required  |
$values  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The values to remove  |  required  |
$comparator  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The comparator invoked per element  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The mutated array

### Example
```php
	$array = [[ 'x' => 1, 'y' => 2 ], [ 'x' => 3, 'y' => 4 ], [ 'x' => 5, 'y' => 6 ]];
Thorin::array_pull_all_with($array, [[ 'x' => 3, 'y' => 4 ]], 'Thorin::is_equal');
// [[ 'x' => 1, 'y' => 2 ], [ 'x' => 5, 'y' => 6 ]]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/pullAllWith.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/pullAllWith.php)