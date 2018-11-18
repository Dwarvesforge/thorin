# array_zip_object_deep

This method is like `Thorin::array_zip_object` except that it supports property paths.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$props  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The property identifiers  |  required  |
$values  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The property values  |  required  |

Return **{ [Object](http://php.net/manual/en/language.types.object.php) }** The new object

### Example
```php
	Thorin::array_zip_object_deep(['a.b[0].c', 'a.b[1].d'], [1, 2]);
/**
class stdClass#20 (1) {
 public $a => class stdClass#19 (1) {
     public $b =>
         array(2) {
             [0] => class stdClass#17 (1) {
                     public $c => int(1)
                 }
            [1] => class stdClass#18 (1) {
                 public $d => int(2)
                 }
         }
     }
 }
*/
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Array/zipObjectDeep.php](https://github.com/lodash-php/lodash-php/blob/master/src/Array/zipObjectDeep.php)