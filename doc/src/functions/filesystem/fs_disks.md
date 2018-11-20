# fs_disks

Mount some disks inside a manager and return a [League\Flysystem\MountManager](https://flysystem.thephpleague.com/docs/advanced/mount-manager/) instance to work with.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$disks...  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The disks that you want inside your pool  |  required  |

Return **{ League\Flysystem\MountManager }** Return the MountManager instance to work with

### Example
```php
	$pool = Thorin::fs_disks('base','assets');
$pool->listContents();
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)