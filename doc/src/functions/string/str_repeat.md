# str_repeat

Repeats the given string `n` times.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$string  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The string to repeat  |  required  |
$n  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The number of times to repeat the string.  |  optional  |  1

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The repeated string.

### Example
```php
	Thorin::str_repeat('*', 3);
// => '***'
Thorin::str_repeat('abc', 2);
// => 'abcabc'
Thorin::str_repeat('abc', 0);
// => ''
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/String/repeat.php](https://github.com/lodash-php/lodash-php/blob/master/src/String/repeat.php)