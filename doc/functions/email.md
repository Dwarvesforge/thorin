# email

- [Thorin::email_mailer_config](#Thorin_email_mailer_config)
- [Thorin::email_mailer_factory](#Thorin_email_mailer_factory)
- [Thorin::email_mailer](#Thorin_email_mailer)
<a name="Thorin_email_mailer_config"></a>
## Thorin::email_mailer_config
Return a mailer configuration array
```php
$disk = Thorin::email_mailer_config('gmail');
```

[Full documentation](/doc/src/functions/email/email_mailer_config.md)

<a name="Thorin_email_mailer_factory"></a>
## Thorin::email_mailer_factory
Return a mailer [PHPMailer](https://github.com/PHPMailer/PHPMailer) instance of the requested mailer registered in the `email` config file
```php
$mailer = Thorin::email_mailer_factory('gmail');
$mailer->addAddress('john.doe@ecample.com', 'John Doe');
$mailer->isHTML(true);
// etc...
if ($mailer->send()) {
  // do something on success
} else {
  // do something on error
}
```

[Full documentation](/doc/src/functions/email/email_mailer_factory.md)

<a name="Thorin_email_mailer"></a>
## Thorin::email_mailer
Return a mailer [PHPMailer](https://github.com/PHPMailer/PHPMailer) instance of the requested mailer registered in the `email` config file
```php
$mailer = Thorin::email_mailer('gmail');
$mailer->addAddress('john.doe@ecample.com', 'John Doe');
$mailer->isHTML(true);
// etc...
if ($mailer->send()) {
  // do something on success
} else {
  // do something on error
}
```

[Full documentation](/doc/src/functions/email/email_mailer.md)
