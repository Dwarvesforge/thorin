# protocol

Get the protocol of a url.
If no url is provided, will take the current one as input.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$url  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The url to extract the query string from  |  optional  |  null

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The protocol from the url

### Example
```php
	Thorin::protocol('https://thorin.io?query=value1&string=value2');
// https
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)