# t_array_has_duplicates

Checks a flat list for duplicate values. Returns true if duplicate values exists and false if values are all unique.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$items  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to check for duplicates  |  required  |

Return **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }** true if has duplicates, false if not

### Example
```php
	Thorin::array_has_duplicates([1,2,3,1,2]);
// true
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/appzcoder/30-seconds-of-php-code](https://github.com/appzcoder/30-seconds-of-php-code)