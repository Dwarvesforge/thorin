# t_image

Return an Intervention Image instance to work with


Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$path  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The path to the image to work with  |  required  |

Return **{ Intervention\Image\Image }** The Intervention Image instance

### Example
```php
	$image = Thorin::image('my-cool-image.png');
$image->resize(200,300);
$image->save('my-cool-image.png');
```
Author : Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)