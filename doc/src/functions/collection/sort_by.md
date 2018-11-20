# sort_by

Creates an array of elements, sorted in ascending order by the results of
running each element in a collection through each iteratee. This method
performs a stable sort, that is, it preserves the original sort order of
equal elements. The iteratees are invoked with one argument: (value).



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$collection  |  **{ [Array](http://php.net/manual/en/language.types.array.php) , [Object](http://php.net/manual/en/language.types.object.php) }**  |  The collection to iterate over  |  required  |
$iteratees  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) , Callable[] }**  |  The iteratees to sort by  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The new sorted array

### Example
```php
	$users = [
  [ 'user' => 'fred',   'age' => 48 ],
  [ 'user' => 'barney', 'age' => 36 ],
  [ 'user' => 'fred',   'age' => 40 ],
  [ 'user' => 'barney', 'age' => 34 ],
];
Thorin::sort_by($users, [function($o) { return $o['user']; }]);
// [['user' => 'barney', 'age' => 36], ['user' => 'barney', 'age' => 34], ['user' => 'fred', 'age' => 48], ['user' => 'fred', 'age' => 40]]

Thorin::sort_by($users, ['user', 'age']);
// [['user' => 'barney', 'age' => 34], ['user' => 'barney', 'age' => 36], ['user' => 'fred', 'age' => 40], ['user' => 'fred', 'age' => 48]]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Collection/sortBy.php](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/sortBy.php)