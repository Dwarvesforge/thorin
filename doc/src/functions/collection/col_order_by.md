# col_order_by

This method is like `Thorin::col_sort_by` except that it allows specifying the sort
orders of the iteratees to sort by. If `orders` is unspecified, all values
are sorted in ascending order. Otherwise, specify an order of "desc" for
descending or "asc" for ascending sort order of corresponding values.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$collection  |  **{ Iterable , null }**  |  The collection to iterate over  |  required  |
$iteratee  |  **{ [Array](http://php.net/manual/en/language.types.array.php) , [Callable](http://php.net/manual/en/language.types.callable.php) , [String](http://php.net/manual/en/language.types.string.php) }**  |  The iteratee(s) to sort by  |  required  |
$orders  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The sort orders of `iteratees`  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The new sorted array

### Example
```php
	$users = [
  ['user' => 'fred',   'age' => 48],
  ['user' => 'barney', 'age' => 34],
  ['user' => 'fred',   'age' => 40],
  ['user' => 'barney', 'age' => 36]
];
Thorin::col_order_by($users, ['user', 'age'], ['asc', 'desc']);
// [['user' => 'barney', 'age' => 36], ['user' => 'barney', 'age' => 34], ['user' => 'fred', 'age' => 48], ['user' => 'fred', 'age' => 40]]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Collection/orderBy.php](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/orderBy.php)