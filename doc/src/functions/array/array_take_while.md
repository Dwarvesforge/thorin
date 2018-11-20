# array_take_while

Creates a slice of `array` with elements taken from the beginning. Elements
are taken until `predicate` returns falsey. The predicate is invoked with
three arguments: (value, index, array)



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to query  |  required  |
$predicate  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The predicte invoked per iteration  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The slice of `array`

### Example
```php
	$users = [
  [ 'user' => 'barney',  'active' => true ],
  [ 'user' => 'fred',    'active' => true ],
  [ 'user' => 'pebbles', 'active' => false ]
];
Thorin::array_take_while($users, function($value) { return $value['active']; });
// objects for ['barney', 'fred']
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/takeWhile.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/takeWhile.php)