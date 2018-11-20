# str_escape

Converts the characters "&", "<", ">", '"', and "'" in `string` to their
corresponding HTML entities.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$string  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The string to escape  |  required  |

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The escaped string

### Example
```php
	Thorin::str_escape('fred, barney, & pebbles');
// fred, barney, &amp pebbles
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/String/escape.php](https://github.com/lodash-php/lodash-php/blob/master/src/String/escape.php)