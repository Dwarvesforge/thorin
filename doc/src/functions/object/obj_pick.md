# obj_pick

Creates an object composed of the picked `object` properties.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$object  |  **{ [Object](http://php.net/manual/en/language.types.object.php) }**  |  The source object  |  required  |
$paths  |  **{ [String](http://php.net/manual/en/language.types.string.php) , String[] }**  |  The property paths to pick  |  required  |

Return **{ [Object](http://php.net/manual/en/language.types.object.php) }** The new object

### Example
```php
	$object = (object) ['a' => 1, 'b' => '2', 'c' => 3];
Thorin::obj_pick($object, ['a','c']);
// (object) ['a' => 1, 'c' => 3]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Object/pick.php](https://github.com/lodash-php/lodash-php/blob/master/src/Object/pick.php)