# t_array_last_index_of

This method is like `Thorin::array_index_of` except that it iterates over elements of
`array` from right to left.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to inspect  |  required  |
$value  |  **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }**  |  The value to search for  |  required  |
$fromIndex  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The index to search from  |  optional  |  null

Return **{ [Integer](http://php.net/manual/en/language.types.integer.php) }** The index of the matched value, else `-1`

### Example
```php
	Thorin::array_last_index_of([1, 2, 1, 2], 2);
// 3
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/lastIndexOf.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/lastIndexOf.php)