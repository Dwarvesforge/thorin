# str_split

Splits `string` by `separator`.

**Note:** This method is based on
[`String#split`](https://mdn.io/String/split).



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$string  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The string to split  |  required  |
$separator  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The separator pattern to split by  |  required  |
$limit  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The length to truncate results to  |  optional  |  0

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The string segments.

### Example
```php
	Thorin::str_split('a-b-c', '-', 2);
// => ['a', 'b']
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/String/split.php](https://github.com/lodash-php/lodash-php/blob/master/src/String/split.php)