# archive_files

Create an archive with some files/folders


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$files  |  **{ [String](http://php.net/manual/en/language.types.string.php) , [Array](http://php.net/manual/en/language.types.array.php) }**  |  The file/folder to archive or an array of files/folders to archive  |  required  |
$archive  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The archive filename to create  |  required  |

Return **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }** false when format does not support archive creation.

### Example
```php
	Thorin::archive_files('my-cool-image.jpg', 'my-archive.zip');
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/wapmorgan/UnifiedArchive](https://github.com/wapmorgan/UnifiedArchive)