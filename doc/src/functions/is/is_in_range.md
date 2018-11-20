# is_in_range

Checks if `number` is between `start` and up to, but not including, `end`. If
`end` is not specified, it's set to `start` with `start` then set to `0`.
If `start` is greater than `end` the params are swapped to support
negative ranges.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$number  |  **{ [Float](http://php.net/manual/en/language.types.float.php) }**  |  The number to check  |  required  |
$start  |  **{ [Float](http://php.net/manual/en/language.types.float.php) }**  |  The start of the range  |  required  |
$end  |  **{ [Float](http://php.net/manual/en/language.types.float.php) }**  |  The end of the range  |  optional  |  0

Return **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }** `true` if `number` is in the range, else `false`

### Example
```php
	Thorin::is_in_range(3, 2, 4);
// true
Thorin::is_in_range(4, 8);
// true
Thorin::is_in_range(4, 2);
// false
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Number/inRange.php](https://github.com/lodash-php/lodash-php/blob/master/src/Number/inRange.php)