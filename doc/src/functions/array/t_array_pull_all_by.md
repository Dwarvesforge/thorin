# t_array_pull_all_by

This method is like `Thorin::array_pull_all` except that it accepts `iteratee` which is
invoked for each element of `array` and `values` to generate the criterion
by which they're compared. The iteratee is invoked with one argument: (value).



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to modify  |  required  |
$values  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The values to remove  |  required  |
$iteratee  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The iteratee invoked per element  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The mutated array

### Example
```php
	$array = [[ 'x' => 1 ], [ 'x' => 2 ], [ 'x' => 3 ], [ 'x' => 1 ]];
Thorin::array_pull_all_by($array, [[ 'x' => 1 ], [ 'x' => 3 ]], 'x');
var_dump($array);
// [[ 'x' => 2 ]]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/pullAllBy.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/pullAllBy.php)