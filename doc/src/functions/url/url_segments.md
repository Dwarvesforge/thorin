# url_segments

Get segments of the provided url in array format.
If no url is specified, take the current one as input.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$url  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The url to extract the segments from  |  optional  |  null

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The array of url segments

### Example
```php
	Thorin::url_segments('http://thorin.io/hello/world?query=value1');
// ['hello','world']
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)