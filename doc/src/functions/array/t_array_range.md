# t_array_range

Create an array with a range from, to.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$from  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  From where to start the array  |  optional  |  0
$to  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  To where the array ends  |  optional  |  100
$step  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The step between each values  |  optional  |  1

### Example
```php
	$ranges = Thorin::array_range(0,10);
// [0,1,2,3,4,5,6,7,8,9,10]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://www.jonasjohn.de/snippets/php/array-range.htm](https://www.jonasjohn.de/snippets/php/array-range.htm)