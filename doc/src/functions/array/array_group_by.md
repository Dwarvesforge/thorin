# array_group_by

Groups the elements of an array based on the given function.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$items  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to process  |  required  |
$func  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The function used to group the items  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The grouped array

### Example
```php
	Thorin::array_group_by(['one','two','three'], 'strlen');
// [3 => ['one', 'two'], 5 => ['three']]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/appzcoder/30-seconds-of-php-code](https://github.com/appzcoder/30-seconds-of-php-code)