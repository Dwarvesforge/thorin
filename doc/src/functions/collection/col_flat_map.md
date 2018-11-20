# col_flat_map

Creates a flattened array of values by running each element in `collection`
through `iteratee` and flattening the mapped results. The iteratee is invoked
with three arguments: (value, index|key, collection).



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$collection  |  **{ Iterable }**  |  The collection to iterate over  |  required  |
$iteratee  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The function invoked per iteration  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The new flattened array

### Example
```php
	function duplicate($n) {
  return [$n, $n]
}
Thorin::col_flat_map([1, 2], 'duplicate');
// [1, 1, 2, 2]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Collection/flatMap.php](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/flatMap.php)