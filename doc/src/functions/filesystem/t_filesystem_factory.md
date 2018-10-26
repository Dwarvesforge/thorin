# $t_filesystems

Create a filesystem instance with the driver requested. Return a [Flysystem](https://flysystem.thephpleague.com/docs/usage/filesystem-api/) instance to work with.
If no driver is passed, the default one in the config filsystem.DEFAULT_DRIVER will be used.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$driver  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The driver wanted. can be local, ftp, sftp, s3 or memory  |  optional  |  null
$forceNewFilesystem  |  **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }**  |  If want a new filesystem instead of the  |  optional  |  false

### Example
```php
	$ftp = Thorin::filesystem_factory('ftp');
$contents = $ftp->listContents('/')
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

Default : **[]**