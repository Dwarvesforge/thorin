# array_unzip

This method is like `Thorin::array_zip` except that it accepts an array of grouped
elements and creates an array regrouping the elements to their pre-zip
configuration.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array of grouped elements to process  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The new array of regrouped elements

### Example
```php
	$zipped = Thorin::array_zip(['a', 'b'], [1, 2], [true, false])
// [['a', 1, true], ['b', 2, false]]
Thorin::array_unzip($zipped);
// [['a', 'b'], [1, 2], [true, false]]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/unzip.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/unzip.php)