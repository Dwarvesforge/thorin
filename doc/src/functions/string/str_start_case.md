# str_start_case

Converts `string` to
[start case](https://en.wikipedia.org/wiki/Letter_case#Stylistic_or_specialised_usage).



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$string  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The string to convert  |  required  |

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The converted string

### Example
```php
	Thorin::str_start_case('--foo-bar--');
// => 'Foo Bar'

Thorin::str_start_case('fooBar');
// => 'Foo Bar'

Thorin::str_start_case('__FOO_BAR__');
// => 'FOO BAR'
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/String/startCase.php](https://github.com/lodash-php/lodash-php/blob/master/src/String/startCase.php)