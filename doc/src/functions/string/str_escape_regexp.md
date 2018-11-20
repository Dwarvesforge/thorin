# str_escape_regexp

Escapes the `RegExp` special characters "^", "$", "\", ".", "*", "+",
"?", "(", ")", "[", "]", "{", "}", and "|" in `string`.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$string  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The string to escape  |  required  |

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The escaped string

### Example
```php
	Thorin::str_escape_regexp('[lodash](https://lodash.com/)');
// \[lodash\]\(https://lodash\.com/\)
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/String/escapeRegExp.php](https://github.com/lodash-php/lodash-php/blob/master/src/String/escapeRegExp.php)