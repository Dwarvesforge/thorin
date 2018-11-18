# t_array_uniq_with

This method is like `Thorin::array_uniq` except that it accepts `comparator` which
is invoked to compare elements of `array`. The order of result values is
determined by the order they occur in the array.The comparator is invoked
with two arguments: (arrVal, othVal).



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to inspect  |  required  |
$comparator  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The comparator invoked per element  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The new duplicate free array

### Example
```php
	$objects = [['x' => 1, 'y' => 2], ['x' => 2, 'y' => 1], ['x' => 1, 'y' => 2]];
Thorin::array_uniq_with($objects, 'Thorin::is_equal');
// [['x' => 1, 'y' => 2], ['x' => 2, 'y' => 1]]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/uniqWith.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/uniqWith.php)