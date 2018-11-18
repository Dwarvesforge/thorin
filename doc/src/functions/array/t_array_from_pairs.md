# t_array_from_pairs

The inverse of `Thorin::array_to_pairs`, this method returns an object composed
from key-value `pairs`.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$pairs  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The key-value pairs  |  required  |

Return **{ [Object](http://php.net/manual/en/language.types.object.php) }** The new object

### Example
```php
	Thorin::array_from_pairs([['a', 1], ['b', 2]]);
// {'a':1, 'b': 2}
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/fromPairs.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/fromPairs.php)