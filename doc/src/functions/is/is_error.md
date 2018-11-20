# is_error

Checks if `value` is an `\Exception`, `\ParseError`, \Error`, \Throwable`, \SoapFault`, \DOMException`, \PDOException`, object.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$value  |  **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }**  |  The value to check  |  required  |

Return **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }** `true` if `value` is an error object, else `false`

### Example
```php
	Thorin::is_error(new \Exception());
// true
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Lang/isError.php](https://github.com/lodash-php/lodash-php/blob/master/src/Lang/isError.php)