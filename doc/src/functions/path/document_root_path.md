# document_root_path

Return the document root path depending on the `path.document_root` config



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$slug  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  An optional slug to add to the root url  |  required  |

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The corresponding root url

### Example
```php
	Thorin::document_root_path('my/cool/file.pdf');
// /app/root/public/my/cool/file.pdf
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)