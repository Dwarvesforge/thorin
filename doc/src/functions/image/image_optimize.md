# image_optimize

Optimize the passed image by compressing (resize and quality) it.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$path  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The image path to process absolute to the server root folder  |  required  |
$saveTo  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  Where to store the optimized image absolute to the server root folder  |  optional  |  null
$settings  |  **{ [Object](http://php.net/manual/en/language.types.object.php) }**  |  The settings to tell how to compress the image  |  optional  |  {}

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The optimized image path. If cache is not used, return the image in base64 format

### Example
```php
	$url = Thorin::image_optimize('my/cool/image.jpg);
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)