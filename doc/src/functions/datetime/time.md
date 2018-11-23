# time

Create a time in [Carbon](https://carbon.nesbot.com/) object format.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$hour  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The hour of the datetime to create  |  optional  |  null
$minute  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The minute of the datetime to create  |  optional  |  null
$second  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The second of the datetime to create  |  optional  |  null

Return **{ Carbon }** A Carbon instance representing your time

### Example
```php
	Thorin::time(23, 30, 0)
// 2018-11-21 23:30:00
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **Carbon documentation** : [https://carbon.nesbot.com/](https://carbon.nesbot.com/)