# size

Gets the size of `collection` by returning its length for array
values or the number of public properties for objects.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$collection  |  **{ [Array](http://php.net/manual/en/language.types.array.php) , [Object](http://php.net/manual/en/language.types.object.php) , [String](http://php.net/manual/en/language.types.string.php) }**  |  The collection to inspect  |  required  |

Return **{ [Integer](http://php.net/manual/en/language.types.integer.php) }** The collection size

### Example
```php
	Thorin::size([1, 2, 3]);
// 3
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Collection/size.php](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/size.php)