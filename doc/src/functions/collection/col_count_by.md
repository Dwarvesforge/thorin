# col_count_by

Creates an array composed of keys generated from the results of running
each element of `collection` through `iteratee`. The corresponding value of
each key is the number of times the key was returned by `iteratee`. The
iteratee is invoked with one argument: (value).



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$collection  |  **{ Iterable }**  |  The collection to iterate over  |  required  |
$iteratee  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The iteratee to transform keys  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** Returns the composed aggregate object

### Example
```php
	Thorin::col_count_by([6.1, 4.2, 6.3], 'floor'));
// ['6' => 2, '4' => 1]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Collection/countBy.php](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/countBy.php)