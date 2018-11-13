# t_is_start_with

Check if the passed string start with the other passed string


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$source  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The source string to check  |  required  |
$with  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The "with" string to check  |  required  |

Return **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }** true if start with, false if not

### Example
```php
	if (Thorin::is_start_with($myText, 'hello world')) {
  // do something here
}
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)