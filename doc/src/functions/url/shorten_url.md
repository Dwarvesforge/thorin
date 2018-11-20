# shorten_url

Shorten a url using the tinyurl service



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$url  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The url to shorten  |  required  |

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The short version of the url

### Example
```php
	Thorin::shorten_url('https://thorin.io');
// http://tinyurl.com/y9tcvddg
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)