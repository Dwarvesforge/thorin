# col_reject

The opposite of `Thorin::col_filter` this method returns the elements of `collection`
that `predicate` does **not** return truthy for.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$collection  |  **{ Iterable }**  |  The collection to iterate over  |  required  |
$predicate  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The function invoked per iteration  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The new filtered array

### Example
```php
	$users = [
  ['user' => 'barney', 'active' => true],
  ['user' => 'fred',   'active' => false]
];
Thorin::col_reject($users, 'active');
// objects for ['fred']
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Collection/reject.php](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/reject.php)