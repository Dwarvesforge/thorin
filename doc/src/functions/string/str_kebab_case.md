# str_kebab_case

Converts `string` to
[kebab case](https://en.wikipedia.org/wiki/Letter_case#Special_case_styles).



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$string  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The string to convert  |  required  |

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The converted string

### Example
```php
	Thorin::str_kebab_case('Foo Bar');
// foo-bar
Thorin::str_kebab_case('fooBar');
// foo-bar
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/String/kebabCase.php](https://github.com/lodash-php/lodash-php/blob/master/src/String/kebabCase.php)