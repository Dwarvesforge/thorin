# col_each_right

This method is like `Thorin::col_each` except that it iterates over elements of
`collection` from right to left.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$collection  |  **{ [Array](http://php.net/manual/en/language.types.array.php) , Iterable , [Object](http://php.net/manual/en/language.types.object.php) }**  |  The collection to iterate over  |  required  |
$iteratee  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The function invoked per iteration  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) , [Object](http://php.net/manual/en/language.types.object.php) }** Returns `collection`

### Example
```php
	Thorin::col_each_right([1, 2], function($value) { echo $value; })
// Echoes `2` then `1`
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Collection/eachRight.php](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/eachRight.php)