# app_path

Return the app path depending on the `path.app` config



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$slug  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  An optional slug to add to the root url  |  required  |

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The corresponding root url

### Example
```php
	Thorin::app_path('config/hello.php');
// /app/root/config/hello.php
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)