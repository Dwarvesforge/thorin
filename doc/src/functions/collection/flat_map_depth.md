# flat_map_depth

This method is like `flatMap` except that it recursively flattens the
mapped results up to `depth` times.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$collection  |  **{ Iterable }**  |  The collection to iterate over  |  required  |
$iteratee  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The function invoked per iteration  |  required  |
$depth  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The maximum recursion depth  |  optional  |  1

### Example
```php
	function duplicate($n) {
  return [[[$n, $n]]];
}
Thorin::flat_map_depth([1, 2], 'duplicate', 2);
// [[1, 1], [2, 2]]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Collection/flatMapDepth.php](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/flatMapDepth.php)