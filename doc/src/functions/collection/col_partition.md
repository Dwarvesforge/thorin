# col_partition

Creates an array of elements split into two groups, the first of which
contains elements `predicate` returns truthy for, the second of which
contains elements `predicate` returns falsey for. The predicate is
invoked with one argument: (value).



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$collection  |  **{ Iterable }**  |  The collection to iterate over  |  required  |
$predicate  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The function invoked per iteration  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The array of grouped elements

### Example
```php
	$users = [
  ['user' => 'barney',  'age' => 36, 'active' => false],
  ['user' => 'fred',    'age' => 40, 'active' => true],
  ['user' => 'pebbles', 'age' => 1,  'active' => false]
];
Thorin::col_partition($users, function($user) { return $user['active']; });
// objects for [['fred'], ['barney', 'pebbles']]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Collection/partition.php](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/partition.php)