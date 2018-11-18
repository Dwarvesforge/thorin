# array_pluck

Retrieves all of the values for a given key.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$items  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to process  |  required  |
$key  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The key to extract  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** An array of extracted values

### Example
```php
	Thorin::array_pluck([
  ['product_id' => 'prod-100', 'name' => 'Desk'],
  ['product_id' => 'prod-200', 'name' => 'Chair'],
], 'name');
// ['Desk','Chair']
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/appzcoder/30-seconds-of-php-code](https://github.com/appzcoder/30-seconds-of-php-code)