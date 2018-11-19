# location

Retreive a location from a passed ip address. If no ip address is passed,
will try to get the user one automaticaly.
This function use [ipinfo.io](https://ipinfo.io) webservice that authorize 1'000 requests per day so you are warned.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$ip_address  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The ip address to find the location from  |  optional  |  null

### Example
```php
	$location = Thorin::location();
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)