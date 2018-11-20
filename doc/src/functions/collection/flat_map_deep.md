# flat_map_deep

This method is like `flatMap` except that it recursively flattens the
mapped results.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$collection  |  **{ Iterable }**  |  The collection to iterate over  |  required  |
$iteratee  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The function invoked per iteration  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The new flattened array

### Example
```php
	function duplicate($n) {
  return [[[$n, $n]]];
}
Thorin::flat_map_deep([1, 2], 'duplicate');
// [1, 1, 2, 2]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Collection/flatMapDeep.php](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/flatMapDeep.php)