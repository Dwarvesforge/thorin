# str_camel_case

Converts `string` to [camel case](https://en.wikipedia.org/wiki/CamelCase).



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$string  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The string to convert  |  required  |

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The converted string

### Example
```php
	Thorin::str_camel_case('Foo Bar');
// fooBar
Thorin::str_camel_case('--foo-bar--');
// fooBar
Thorin::str_camel_case('__FOO_BAR__');
// fooBar
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/String/camelCase.php](https://github.com/lodash-php/lodash-php/blob/master/src/String/camelCase.php)