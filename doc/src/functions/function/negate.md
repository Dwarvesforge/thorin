# negate

Creates a function that negates the result of the predicate `func`



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$predicate  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The predicate to negate  |  required  |

Return **{ [Callable](http://php.net/manual/en/language.types.callable.php) }** The new negated function

### Example
```php
	function isEven($n) {
  return $n % 2 == 0;
}
Thorin::filter([1, 2, 3, 4, 5, 6], Thorin::negate($isEven));
// [1, 3, 5]
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Function/negate.php](https://github.com/lodash-php/lodash-php/blob/master/src/Function/negate.php)