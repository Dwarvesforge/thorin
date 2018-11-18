# t_extract_files

Extract an archive file in an output folder


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$archive  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The archive file to extract  |  required  |
$output  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The output folder for the extracted files  |  required  |

Return **{ [Integer](http://php.net/manual/en/language.types.integer.php) , [Boolean](http://php.net/manual/en/language.types.boolean.php) }** The number of extracted files or false if an error has occured

### Example
```php
	Thorin::extract_files('my-archive.zip','my-output-folder');
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/wapmorgan/UnifiedArchive](https://github.com/wapmorgan/UnifiedArchive)