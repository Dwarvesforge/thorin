# str_pad_start

Pads `string` on the left side if it's shorter than `length`. Padding
characters are truncated if they exceed `length`.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$string  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The string to pad  |  required  |
$length  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The padding length  |  required  |
$chars  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The string used as padding  |  optional  |  ' '

### Example
```php
	Thorin::str_pad_startd('abc', 6);
// '   abc'
Thorin::str_pad_start('abs', 6, '_-');
// '_-_abc'
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/String/padStart.php](https://github.com/lodash-php/lodash-php/blob/master/src/String/padStart.php)