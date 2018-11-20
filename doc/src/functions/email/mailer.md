# mailer

Return a mailer [PHPMailer](https://github.com/PHPMailer/PHPMailer) instance of the requested mailer registered in the `email` config file


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$mailer  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The mailer name requested. If not passed, will take the email.default_mailer config.  |  optional  |  null

Return **{ PHPMailer\PHPMailer\PHPMailer }** A phpmailer instance to work with

### Example
```php
	$mailer = Thorin::mailer('gmail');
$mailer->addAddress('john.doe@ecample.com', 'John Doe');
$mailer->isHTML(true);
// etc...
if ($mailer->send()) {
  // do something on success
} else {
  // do something on error
}
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com)