# tld

Get top level domain of the provided url in array format.
If no url is specified, take the current one as input.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$url  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The url to extract the tld from  |  optional  |  null

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The top level domain extracted

### Example
```php
	Thorin::tld('http://thorin.io/hello/world?query=value1');
// io
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)