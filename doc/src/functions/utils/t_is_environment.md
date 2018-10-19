# t_is_environment

Check if the environment correspond to at least 1 passed environments


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$environments...  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The environments to check  |  required  |

Return **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }** true if 1 environment match the actual environment

### Example
```php
	if (Thorin::is_environment('testing','production')) {
    // do something
}
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)