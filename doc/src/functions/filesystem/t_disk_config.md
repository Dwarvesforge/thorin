# t_disk_config

Return a disk configuration array


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$name  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The name of the disk wanted  |  optional  |  "base"

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The disk configuration

### Example
```php
	$disk = Thorin::disk('base');
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)