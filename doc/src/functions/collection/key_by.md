# key_by

Creates an object composed of keys generated from the results of running
each element of `collection` through `iteratee`. The corresponding value of
each key is the last element responsible for generating the key. The
iteratee is invoked with one argument: (value).



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$collection  |  **{ Iterable }**  |  The collection to iterate over  |  required  |
$iteratee  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The iteratee to transform keys  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The composed aggregate object

### Example
```php
	$array = [
  ['direction' => 'left', 'code' => 97],
  ['direction' => 'right', 'code' => 100],
];
Thorin::key_by($array, function ($o) { return \chr($o['code']); });
// ['a' => ['direction' => 'left', 'code' => 97], 'd' => ['direction' => 'right', 'code' => 100]]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Collection/keyBy.php](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/keyBy.php)