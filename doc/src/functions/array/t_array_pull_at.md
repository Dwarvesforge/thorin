# t_array_pull_at

Removes elements from `array` corresponding to `indexes` and returns an
array of removed elements.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to process  |  required  |
$indexes  |  **{ Array<Integer> }**  |  The indexes of elements to remove  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The new array of removed elements

### Example
```php
	$array = ['a', 'b', 'c', 'd'];
Thorin::array_pull_at($array, [1, 3]);
// ['b', 'd']
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/pullAt.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/pullAt.php)