# t_is_email

Check if the passed email is valid


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$value  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The value to check if is an email or not  |  required  |

Return **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }** true if is an email, false if not

### Example
```php
	if (Thorin::is_email('something@something.com')) {
    // do something
}
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)