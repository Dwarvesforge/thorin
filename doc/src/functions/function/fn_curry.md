# fn_curry

Curries a function to take arguments in multiple calls.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$function  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  Function to currie  |  required  |

Return **{ [Callable](http://php.net/manual/en/language.types.callable.php) }** The curried function

### Example
```php
	$currieAdd = Thorin::fn_curry(function($a, $b) {
   return $a + $b;
});
$currieAdd(10)(15); // 25
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/appzcoder/30-seconds-of-php-code](https://github.com/appzcoder/30-seconds-of-php-code)