# find

Iterates over elements of `collection`, returning the first element
`predicate` returns truthy for. The predicate is invoked with three
arguments: (value, index|key, collection).



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
Thorin::find($users, function($o) { return $o['age'] < 40; });
// object for 'barney'
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Collection/find.php](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/find.php)