# image_average_color

Get the average color of an image in hexadecimal format like "45A3F3"


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$filePath  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The file path to the image  |  required  |

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The average color of the image

### Example
```php
	$color = Thorin::image_average_color(Thorin::asset_path('img/my-cool-image.jpg'));
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/ksubileau/color-thief-php](https://github.com/ksubileau/color-thief-php)