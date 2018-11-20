# array_reject

Filters the collection using the given callback.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$items  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to process  |  required  |
$func  |  **{ [Callback](http://php.net/manual/en/language.pseudo-types.php#language.types.callback) }**  |  The function used to filter the items  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The filtered array

### Example
```php
	Thorin::array_reject(['Apple', 'Pear', 'Kiwi', 'Banana'], function($item) {
  return strlen($item) > 4;
});
// ['Pear','Kiwi']
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/appzcoder/30-seconds-of-php-code](https://github.com/appzcoder/30-seconds-of-php-code)