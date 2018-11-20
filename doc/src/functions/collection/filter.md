# filter

Iterates over elements of `array`, returning an array of all elements
`predicate` returns truthy for. The predicate is invoked with three
arguments: (value, index, array).



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ Iterable }**  |  The array to iterate over  |  required  |
$predicate  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The function invoked per iteration  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The new filtered array

### Example
```php
	$users = [
    [ 'user' => 'barney', 'age' => 36, 'active' => true],
    [ 'user' => 'fred',   'age' => 40, 'active' => false]
];
Thorin::filter($users, function($o) { return !$o['active']; });
// objects for ['fred']
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Collection/filter.php](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/filter.php)