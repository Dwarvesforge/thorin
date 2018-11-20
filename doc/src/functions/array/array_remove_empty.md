# array_remove_empty

Remove empty entries in an array


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to process  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The new processed array

### Example
```php
	$newArray = Thorin::array_remove_empty(['','hello','','world']);
// ['hello','world']
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)