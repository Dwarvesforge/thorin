# t_array_order_by

Sorts a collection of arrays or objects by key.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$items  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to process  |  required  |
$attr  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The attribute used to order the items  |  required  |
$order  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The order. Can be `desc` or `asc`  |  optional  |  "asc"

### Example
```php
	Thorin::array_order_by([
   ['id' => 2, 'name' => 'Joy'],
   ['id' => 3, 'name' => 'Khaja'],
   ['id' => 1, 'name' => 'Raja']
], 'id', 'desc');
// [['id' => 3, 'name' => 'Khaja'], ['id' => 2, 'name' => 'Joy'], ['id' => 1, 'name' => 'Raja']]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/appzcoder/30-seconds-of-php-code](https://github.com/appzcoder/30-seconds-of-php-code)