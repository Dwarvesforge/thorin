# asset_url

Return a url relative to the `path.assets` and the `app.root_url` config



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$slug  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The asset slug to get  |  required  |
$include_domain  |  **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }**  |  If want the fully qualified domain in the url  |  optional  |  false

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The corresponding asset url

### Example
```php
	Thorin::asset_url('my/cool/image.jpg');
// /dist/my/cool/image.jpg

Thorin::asset_url('my/cool/image.jpg', true);
// https://thorin.io/dist/my/cool/image.jpg
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)