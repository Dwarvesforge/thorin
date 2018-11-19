# url_root

Return the root website url depending on the `app.root_url` config



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$slug  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  An optional slug to add to the root url  |  required  |
$include_domain  |  **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }**  |  If want the fully qualified domain in the url  |  optional  |  false

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The corresponding root url

### Example
```php
	Thorin::url_root('my/cool/file.pdf');
// /my/cool/file.pdf

Thorin::url_root('my/cool/file.pdf', true);
// https://thorin.io/my/cool/file.pdf
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)