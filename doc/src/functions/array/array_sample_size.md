# array_sample_size

Gets `n` random elements at unique keys from `array` up to the
size of `array`.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to sample  |  required  |
$n  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The number of elements to sample  |  optional  |  1

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The random elements

### Example
```php
	Thorin::array_sample_size([1, 2, 3], 2);
// [1,3]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Collection/sampleSize.php](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/sampleSize.php)