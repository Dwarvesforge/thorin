# str_unescape

The inverse of `escape`this method converts the HTML entities
`&amp;`, `&lt;`, `&gt;`, `&quot;` and `&#39;` in `string` to
their corresponding characters.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$string  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The string to unescape  |  required  |

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The unescaped string

### Example
```php
	Thorin::str_unescape('fred, barney, &amp; pebbles');
// 'fred, barney, & pebbles'
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/String/unescape.php](https://github.com/lodash-php/lodash-php/blob/master/src/String/unescape.php)