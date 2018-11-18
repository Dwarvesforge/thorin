# t_file_ext

Return the extension of the file path passed


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$filepath  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The file path to get the extension from  |  required  |

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The extension without the dot

### Example
```php
	$ext = Thorin::ext('my/cool/file.jpg');
// jpg
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)