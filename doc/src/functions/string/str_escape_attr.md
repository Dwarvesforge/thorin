# str_escape_attr

Escape the passed string to ensure it will not break any html when printed inside an attribute



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$string  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The string to process  |  required  |

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The safe string to put inside any html attribute

### Example
```php
	Thorin::str_escape_attr('This is my cool "escaped" value');
// This is my cool &quot;escaped&quot; value
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com)