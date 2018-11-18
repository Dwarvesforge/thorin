# t_filesystem_factory

Create a filesystem instance with the disk requested. Return a [Flysystem](https://flysystem.thephpleague.com/docs/usage/filesystem-api/) instance to work with.
If no disk is passed, the default one in the config filsystem.default_disk will be used.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$disk  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The disk wanted. can be any disk configured in your filesystem config file.  |  optional  |  null

### Example
```php
	$ftp = Thorin::filesystem_factory('ftp');
$contents = $ftp->listContents('/')
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)