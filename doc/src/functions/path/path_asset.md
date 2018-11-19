# path_asset

Return a path relative to the `path.assets` config



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$slug  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The asset slug to get  |  required  |

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The corresponding asset path like /dist/my-cool-file.jpg

### Example
```php
	Thorin::path_asset('my/cool/picture.jpg');
// /app/root/dist/my/cool/picture.jpg
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)