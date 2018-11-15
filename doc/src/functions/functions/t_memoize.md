# t_memoize

Memoization of a function results in memory.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$func  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The function to memoize  |  required  |

Return **{ [Callable](http://php.net/manual/en/language.types.callable.php) }** The memoized function

### Example
```php
	$memoizedAdd = Thorin::memoize(
  function ($num) {
    return $num + 10;
  }
);
$memoizedAdd(5); // 15
$memoizedAdd(6); // 16
$memoizedAdd(5); // 15 but cached
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/appzcoder/30-seconds-of-php-code](https://github.com/appzcoder/30-seconds-of-php-code)