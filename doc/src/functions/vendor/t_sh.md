# t_sh

Call a shell function and pass it some arguments.
This use the cool [Shellwrap](https://github.com/MrRio/shellwrap) library to work.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$command  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The comment to call  |  required  |
$args...  |  **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }**  |  The arguments to pass to the command  |  required  |

### Example
```php
	$res = Thorin::sh('ls', '-la');
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)