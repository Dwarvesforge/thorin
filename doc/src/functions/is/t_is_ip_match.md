# t_is_ip_match

Check if the user ip address is in the list passed as argument


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$ipsList  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The list (array) of ips. Can be something like 345.33.*.*  |  required  |
$ip  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The ip to check agains the list. If null, will take the current user ip  |  optional  |  null

Return **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }** true if ip is banned, false if not

### Example
```php
	if (Thorin::is_ip_match([127.0.0.1])) {
  // user ip is banned so do something
}
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)