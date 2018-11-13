# t_human_filesize

Convert a filesize into a human readable filesize like 10 TO, etc...


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$filesize  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The filesize to convert  |  required  |

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The converted filesize

### Example
```php
	print Thorin::human_filesize(14356543);
// 13.69 MB
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)