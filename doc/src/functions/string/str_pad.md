# str_pad

Pads `string` on the left and right sides if it's shorter than `length`.
Padding characters are truncated if they can't be evenly divided by `length`.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$string  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The string to pad  |  required  |
$length  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The padding length  |  required  |
$chars  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The string used as padding  |  optional  |  ' '

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The padded string

### Example
```php
	Thorin::str_pad('abc', 8);
// '  abc   '
Thorin::str_pad('abs', 8, '_-');
// '_-abc_-_'
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/String/pad.php](https://github.com/lodash-php/lodash-php/blob/master/src/String/pad.php)