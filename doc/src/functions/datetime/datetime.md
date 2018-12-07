# datetime

Create a datetime in [Carbon](https://carbon.nesbot.com/) object format.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$year  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The year of the datetime to create  |  optional  |  null
$month  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The month of the datetime to create  |  optional  |  null
$day  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The day of the datetime to create  |  optional  |  null
$hour  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The hour of the datetime to create  |  optional  |  null
$minute  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The minute of the datetime to create  |  optional  |  null
$second  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The second of the datetime to create  |  optional  |  null

Return **{ Carbon }** A Carbon instance representing your datetime

### Example
```php
	Thorin::datetime(2018, 11, 21, 0, 0, 0)
// 2018-11-21 00:00:00
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **Carbon documentation** : [https://carbon.nesbot.com/](https://carbon.nesbot.com/)