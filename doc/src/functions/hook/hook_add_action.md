# hook_add_action

Add an action linked to a callback that will be called when the `t_do_action` with the same name is called.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$name  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The action name to register  |  required  |
$callback  |  **{ [Callable](http://php.net/manual/en/language.types.callable.php) }**  |  The function to call  |  required  |
$priority  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  Used to specify the order in which the functions associated with a particular action are executed (default: 10). Lower numbers correspond with earlier execution, and functions with the same priority are executed in the order in which they were added to the action.  |  optional  |  10
$accepted_args  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The number of arguments the function accept (default 1).  |  optional  |  1

### Example
```php
	Thorin::hook_add_action('my-action', function() {
  // do something
});
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://packagist.org/packages/voku/php-hooks](https://packagist.org/packages/voku/php-hooks)