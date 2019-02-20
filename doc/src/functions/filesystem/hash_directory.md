# hash_directory

Return a md5 hash of the passed directory


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$directory_path  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The directory path to hash  |  required  |

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The md5 hash of the directory

### Example
```php
	$ext = Thorin::hash_directory('my/cool/directory');
// A92B0AB54ACC099B298B9DA94AFB4461
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)