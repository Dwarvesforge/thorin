# array_zip_object

This method is like `Thorin::array_from_pairs` except that it accepts two arrays,
one of property identifiers and one of corresponding values.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$props  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The property identifiers  |  required  |
$values  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The property values  |  required  |

Return **{ [Object](http://php.net/manual/en/language.types.object.php) }** The new object

### Example
```php
	Thorin::array_zip_object(['a', 'b'], [1, 2]);
/* => object(stdClass)#210 (2) {
  ["a"] => int(1)
  ["b"] => int(2)
}
*/
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/zipObject.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/zipObject.php)