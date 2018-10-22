# t_extend

Extend an array or an object either deeply or not


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$a  |  **{ [Array](http://php.net/manual/en/language.types.array.php) , [Object](http://php.net/manual/en/language.types.object.php) }**  |  The source object to extend  |  required  |
$b  |  **{ [Array](http://php.net/manual/en/language.types.array.php) , [Object](http://php.net/manual/en/language.types.object.php) }**  |  The object to extend the source one  |  required  |
$deep  |  **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }**  |  If want to extend the source recursively  |  optional  |  true
$extendNonAssociativeArrays  |  **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }**  |  If we want to extend non associative arrays in place of replace it  |  optional  |  true

Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com)