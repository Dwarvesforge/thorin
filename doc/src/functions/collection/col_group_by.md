# col_group_by

Creates an array composed of keys generated from the results of running
each element of `collection` through `iteratee`. The order of grouped values
is determined by the order they occur in `collection`. The corresponding
value of each key is an array of elements responsible for generating the
key. The iteratee is invoked with one argument: (value).



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$collection  |  **{ Itarable }**  |  The collection to iterate over  |  required  |
$iteratee  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The iteratee to transform keys  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The composed aggregate object

### Example
```php
	Thorin::col_group_by([6.1, 4.2, 6.3], 'floor');
// ['6' => [6.1, 6.3], '4' => [4.2]]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Collection/groupBy.php](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/groupBy.php)