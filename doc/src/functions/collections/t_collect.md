# t_collect

Create a [collection instance](https://laravel.com/docs/5.7/collections#available-methods) to work with from the passed array.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$array  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The array to create the collection from  |  required  |

Return **{ Collection }** The collection instance around the passed array

### Example
```php
	Thorin::collect(['taylor', 'abigail', null])
->reject(function ($name) {
  return empty($name);
})
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://packagist.org/packages/tightenco/collect](https://packagist.org/packages/tightenco/collect)