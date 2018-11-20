# col_each

Iterates over elements of `collection` and invokes `iteratee` for each element.
The iteratee is invoked with three arguments: (value, index|key, collection).
Iteratee functions may exit iteration early by explicitly returning `false`.

**Note:** As with other "Collections" methods, objects with a "length"
property are iterated like arrays. To avoid this behavior use `forIn`
or `forOwn` for object iteration.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$collection  |  **{ [Array](http://php.net/manual/en/language.types.array.php) , Iterable , [Object](http://php.net/manual/en/language.types.object.php) }**  |  The collection to iterate over  |  required  |
$itaratee  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The function invoked per iteration  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) , [Object](http://php.net/manual/en/language.types.object.php) }** Returns `collection`

### Example
```php
	Thorin::col_each([1, 2], function ($value) { echo $value; });
// Echoes `1` then `2`.
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Collection/each.php](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/each.php)