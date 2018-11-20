# array_max_by

This method is like `Thorin::array_max` except that it accepts `iteratee` which is
invoked for each element in `array` to generate the criterion by which
the value is ranked. The iteratee is invoked with one argument: (value).



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to iterate over  |  required  |
$iteratee  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) , [String](http://php.net/manual/en/language.types.string.php) }**  |  The iteratee invoked per element  |  required  |

Return **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }** The maximum value

### Example
```php
	$objects = [['n' => 1], ['n' => 2]];
Thorin::array_max_by($objects, function($o) { return $o['n']; });
// ['n' => 2]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Math/maxBy.php](https://github.com/lodash-php/lodash-php/blob/master/src/Math/maxBy.php)