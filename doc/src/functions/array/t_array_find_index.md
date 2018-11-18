# t_array_find_index

This method is like `Thorin::array_find` except that it returns the index of the first element predicate returns truthy for instead of the element itself.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to process  |  required  |
$predicate  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The function invoked per iteration  |  required  |
$fromIndex  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The index to search from  |  optional  |  null

Return **{ [Integer](http://php.net/manual/en/language.types.integer.php) }** The index of the found element, otherwise -1

### Example
```php
	$users = [
    ['user' => 'barney',  'active' => false],
    ['user' => 'fred',    'active' => false],
    ['user' => 'pebbles', 'active' => true],
];
Thorin::array_find_index($users, function($o) { return $o['user'] == 'barney'; });
// 0
Thorin::array_find_index($users, ['user' => 'fred', 'active' => false]);
// 1
Thorin::array_find_index($users, ['active', false]);
// 0
Thorin::array_find_index($users, 'active');
// 2
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/findIndex.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/findIndex.php)