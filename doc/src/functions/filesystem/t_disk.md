# t_disk

Return a filesystem [Flysystem](http://flysystem.thephpleague.com/docs/) instance of the requested disk


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$name  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The disk name requested  |  required  |

Return **{ League\Flysystem\Filesystem }** A filesystem instance to work with

### Example
```php
	$disk = Thorin::disk('local');
$disk->listContents();
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com)