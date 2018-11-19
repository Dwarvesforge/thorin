# str_pad_end

Pads `string` on the right side if it's shorter than `length`. Padding
characters are truncated if they exceed `length`.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$string  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The string to pad  |  required  |
$length  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The padding length  |  required  |
$chars  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The string used as padding  |  optional  |  ' '

### Example
```php
	Thorin::str_pad_end('abc', 6);
// 'abc   '
Thorin::str_pad_end('abs', 6, '_-');
// 'abc_-_'
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/String/padEnd.php](https://github.com/lodash-php/lodash-php/blob/master/src/String/padEnd.php)