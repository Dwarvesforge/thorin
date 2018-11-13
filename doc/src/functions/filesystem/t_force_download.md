# t_force_download

Force download the passed file with the passed name


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$filepath  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The path to the file that will be downloaded  |  required  |
$filename  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The name of the file once it has been downloaded  |  required  |

### Example
```php
	Thorin::force_download('/path/to/my-file.zip', 'cool-file.zip');
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://www.jonasjohn.de/snippets/php/file-download.htm](https://www.jonasjohn.de/snippets/php/file-download.htm)