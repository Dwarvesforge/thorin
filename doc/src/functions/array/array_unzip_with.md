# array_unzip_with

This method is like `Thorin::array_unzip` except that it accepts `iteratee` to specify
how regrouped values should be combined. The iteratee is invoked with the
elements of each group: (...group).



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array of grouped elements to process  |  required  |
$iteratee  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The function to combine regrouped values  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The new array of regrouped elements

### Example
```php
	$zipped = Thorin::array_zip([1, 2], [10, 20], [100, 200]);
// [[1, 10, 100], [2, 20, 200]]
Thorin::array_unzip_with($zipped, 'Thorin::add');
// [3, 30, 300]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/unzipWith.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/unzipWith.php)