# compose

Return a new function that composes multiple functions into a single callable.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
...$functions  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The functions to compose  |  required  |

Return **{ [Callable](http://php.net/manual/en/language.types.callable.php) }** A function that rule them all

### Example
```php
	$composed = Thorin::compose(function($x) {
  return $x + 1;
}, function($y) {
  return $y + 10
});
$composed(2); // 13
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/appzcoder/30-seconds-of-php-code](https://github.com/appzcoder/30-seconds-of-php-code)