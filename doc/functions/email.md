# email

- [Thorin::email_has_mx](#Thorin_email_has_mx)
- [Thorin::email_mailer_config](#Thorin_email_mailer_config)
- [Thorin::email_mailer_factory](#Thorin_email_mailer_factory)
- [Thorin::email_mailer](#Thorin_email_mailer)
<a name="Thorin_email_has_mx"></a>
## Thorin::email_has_mx
Check if the passed email address has some mx configurated.

```php
Thorin::email_has_mx('hello@google.com');
// true
Thorin::email_has_mx('example@example.com');
// false
Thorin::email_has_mx('example.com');
// null
```

[Full documentation](/doc/src/functions/email/email_has_mx.md)

[See more](https://github.com/nojacko/email-validator)

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
