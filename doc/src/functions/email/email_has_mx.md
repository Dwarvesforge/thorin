# email_has_mx

Check if the passed email address has some mx configurated.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$email  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The email to check mx for  |  required  |

Return **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }** `true` if has some mx, `false` if not

### Example
```php
	Thorin::email_has_mx('hello@google.com');
// true
Thorin::email_has_mx('example@example.com');
// false
Thorin::email_has_mx('example.com');
// null
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/nojacko/email-validator](https://github.com/nojacko/email-validator)