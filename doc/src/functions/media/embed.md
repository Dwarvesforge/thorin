# embed

Get the embed code for the passed url



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$url  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The url of the video to embed  |  required  |

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The embed code

### Example
```php
	Thorin::embed('https://www.youtube.com/watch?v=1qSTcxt2t74');
// <iframe src="...
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)