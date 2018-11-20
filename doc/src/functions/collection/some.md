# some

Checks if `predicate` returns truthy for **any** element of `collection`.
Iteration is stopped once `predicate` returns truthy. The predicate is
invoked with three arguments: (value, index|key, collection).



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$collection  |  **{ Iterable }**  |  The collection to iterate over  |  required  |
$predicate  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) , [String](http://php.net/manual/en/language.types.string.php) , [Array](http://php.net/manual/en/language.types.array.php) }**  |  The function invoked per iteration  |  required  |

Return **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }** `true` if any element passes the predicate check, else `false`

### Example
```php
	Thorin::some([null, 0, 'yes', false], , function ($value) { return \is_bool($value); }));
// true
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Collection/some.php](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/some.php)