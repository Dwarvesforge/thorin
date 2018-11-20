# whois

Query the whois service and return the response for the passed domain name


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$domain  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The domain name to check  |  required  |

### Example
```php
	$whois = Thorin::whois('olivierbossel.com');
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)