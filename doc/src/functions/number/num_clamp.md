# num_clamp

Clamps `number` within the inclusive `lower` and `upper` bounds.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$number  |  **{ [Number](http://php.net/manual/en/language.pseudo-types.php#language.types.number) }**  |  The number to clamp  |  required  |
$lower  |  **{ [Number](http://php.net/manual/en/language.pseudo-types.php#language.types.number) }**  |  The lower bound  |  required  |
$upper  |  **{ [Number](http://php.net/manual/en/language.pseudo-types.php#language.types.number) }**  |  The upper bound  |  required  |

Return **{ [Number](http://php.net/manual/en/language.pseudo-types.php#language.types.number) }** The clamped number

### Example
```php
	Thorin::num_clamp(-10, -5, 5);
// -5
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Number/clamp.php](https://github.com/lodash-php/lodash-php/blob/master/src/Number/clamp.php)