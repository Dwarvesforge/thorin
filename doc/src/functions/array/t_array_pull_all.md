# t_array_pull_all

This method is like `Thorin::array_pull` except that it accepts an array of values to remove.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to modify  |  required  |
$values  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The values to exclude  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The mutated array

### Example
```php
	$array = ['a', 'b', 'c', 'a', 'b', 'c'];
Thorin::array_pull_all($array, ['a', 'c']);
var_dump($array);
// ['b', 'b']
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/pullAll.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/pullAll.php)