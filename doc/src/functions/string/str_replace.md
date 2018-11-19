# str_replace

Replaces matches for `pattern` in `string` with `replacement`.

**Note:** This method is based on
[`String#replace`](https://mdn.io/String/replace).



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$string  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The string to modify  |  required  |
$pattern  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The pattern to replace  |  required  |
$replacement  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) , [String](http://php.net/manual/en/language.types.string.php) }**  |  The match replacement  |  required  |

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The modified string.

### Example
```php
	Thorin::str_replace('Hi Fred', 'Fred', 'Barney')
// => 'Hi Barney'
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/String/replace.php](https://github.com/lodash-php/lodash-php/blob/master/src/String/replace.php)