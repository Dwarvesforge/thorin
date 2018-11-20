# base_path

Return the base path depending on the `path.base` config



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$slug  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  An optional slug to add to the base path  |  required  |

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The corresponding base path

### Example
```php
	Thorin::base_path('my/cool/picture.jpg');
// /app/root/my/cool/picture.jpg
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)