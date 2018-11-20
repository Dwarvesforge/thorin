# email_mailer_config

Return a mailer configuration array


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$name  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The name of the mailer wanted. If not specified will take the email.default_driver config  |  optional  |  null

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The mailer configuration

### Example
```php
	$disk = Thorin::email_mailer_config('gmail');
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)