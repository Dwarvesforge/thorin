# url_extract_from_str

Extract the url's from the passed string. Return the result in array format



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$string  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The string to extract the url's from  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The array of url's extracted

### Example
```php
	$string = 'Hello https://google.com, this is the universe talking';
Thorin::url_extract_from_str($string);
// ['https://google.com']
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)