# hook_do_action

Execute all the corresponding actions registered with the `t_add_action` function.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$name  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The action name to execute  |  required  |
$args...  |  **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }**  |  Optional additional arguments which are passed on to the functions hooked to the action.  |  required  |

### Example
```php
	Thorin::hook_do_action('my-action');
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://packagist.org/packages/voku/php-hooks](https://packagist.org/packages/voku/php-hooks)