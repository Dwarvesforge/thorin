# col_map

Creates an array of values by running each element in `collection` through
`iteratee`. The iteratee is invoked with three arguments:
(value, index|key, collection).



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$collection  |  **{ [Array](http://php.net/manual/en/language.types.array.php) , [Object](http://php.net/manual/en/language.types.object.php) }**  |  The collection to iterate over  |  required  |
$iteratee  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) , [String](http://php.net/manual/en/language.types.string.php) , [Array](http://php.net/manual/en/language.types.array.php) }**  |  The function invoked per iteration  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The new mapped array

### Example
```php
	function square(int $n) {
  return $n * $n;
}
Thorin::col_map([4, 8], 'square');
// [16, 64]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Collection/map.php](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/map.php)