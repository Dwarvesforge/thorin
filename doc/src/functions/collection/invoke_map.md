# invoke_map

Invokes the method at `path` of each element in `collection`, returning
an array of the results of each invoked method. Any additional arguments
are provided to each invoked method. If `path` is a function, it's invoked
for, and `this` bound to, each element in `collection`.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$collection  |  **{ Itarable }**  |  The collection to iterate over  |  required  |
$path  |  **{ [Array](http://php.net/manual/en/language.types.array.php) , [Callable](http://php.net/manual/en/language.types.callable.php) , [String](http://php.net/manual/en/language.types.string.php) }**  |  The path of the method to invoke or the function invoked per iteration  |  required  |
$args  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The arguments to invoke each method with  |  optional  |  []

### Example
```php
	Thorin::invoke_map([[5, 1, 7], [3, 2, 1]], function($result) { sort($result); return $result;});
// [[1, 5, 7], [1, 2, 3]]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Collection/invokeMap.php](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/invokeMap.php)