# str_deburr

Deburrs `string` by converting
[Latin-1 Supplement](https =>//en.wikipedia.org/wiki/Latin-1_Supplement_(Unicode_block)#Character_table)
and [Latin Extended-A](https =>//en.wikipedia.org/wiki/Latin_Extended-A)
letters to basic Latin letters and removing
[combining diacritical marks](https =>//en.wikipedia.org/wiki/Combining_Diacritical_Marks).



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$string  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The string to deburr  |  required  |

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The deburred string

### Example
```php
	Thorin::str_deburr('déjà vue');
// deja vue
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/String/deburr.php](https://github.com/lodash-php/lodash-php/blob/master/src/String/deburr.php)