# url_query_string

Get the query string of a url in array key->pair format.
If no url is provided, will take the current one as input.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$url  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The url to extract the query string from  |  optional  |  null

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The query string in key->pair format

### Example
```php
	Thorin::url_query_string('https://thorin.io?query=value1&string=value2');
// ['query' => 'value1', 'string' => 'value2']
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)