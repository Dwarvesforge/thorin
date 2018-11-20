# is_equal

Performs a deep comparison between two values to determine if they are
equivalent.

**Note:** This method supports comparing arrays, booleans,
DateTime objects, exception objects, SPLObjectStorage, numbers,
strings, typed arrays, resources, DOM Nodes. objects are compared
by their own, not inherited, enumerable properties.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$value  |  **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }**  |  The value to compare  |  required  |
$other  |  **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }**  |  The other value to compare  |  required  |

Return **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }** true if equivalent, false if not

### Example
```php
	Thorin::is_equal([ 'a' => 1], ['a' => '1'])
// true
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Lang/isEqual.php](https://github.com/lodash-php/lodash-php/blob/master/src/Lang/isEqual.php)