# t_array_pull

Removes all given values from `array` using
[`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
for equality comparisons.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to modify  |  required  |
...$values  |  **{ [Array](http://php.net/manual/en/language.types.array.php) , [String](http://php.net/manual/en/language.types.string.php) , [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The values to remove  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The modified array

### Example
```php
	$array = ['a', 'b', 'c', 'a', 'b', 'c'];
Thorin::array_pull($array, 'a', 'c');
var_dump($array);
// ['b', 'b']
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/pull.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/pull.php)