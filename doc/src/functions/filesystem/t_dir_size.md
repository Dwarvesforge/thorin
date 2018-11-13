# t_dir_size

Calculate a directory size


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$directory_path  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The directory path to calculate the size from  |  required  |

Return **{ [Integer](http://php.net/manual/en/language.types.integer.php) }** The directory size

### Example
```php
	$size = Thorin::get_dir_size('my_cool_directory');
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)