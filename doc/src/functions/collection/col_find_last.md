# col_find_last

This method is like `Thorin::col_find` except that it iterates over elements of
`collection` from right to left.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$collection  |  **{ Itarable }**  |  The collection to inspect  |  required  |
$predicate  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The function invoked per iteration  |  required  |
$fromIndex  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The index to search from  |  optional  |  0

Return **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }** Returns the matched element, else `null`

### Example
```php
	$users = [
    ['user' => 'barney',  'age' => 36, 'active' => true],
    ['user' => 'fred',    'age' => 40, 'active' => false],
    ['user' => 'pebbles', 'age' => 1,  'active' => true]
];
Thorin::col_find($users, function($o) { return $o['age'] < 40; });
// object for 'pebbles'
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Collection/find.php](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/find.php)