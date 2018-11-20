# url_subdomain

Get subdomain of the provided url in array format.
If no url is specified, take the current one as input.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$url  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The url to extract the subdomain from  |  optional  |  null

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The subdomain extracted, null if doesn't exist

### Example
```php
	Thorin::url_subdomain('http://hello.thorin.io/hello/world?query=value1');
// hello
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)