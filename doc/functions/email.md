# email

- [Thorin::mailer_config](#Thorin::mailer_config)
- [Thorin::mailer_factory](#Thorin::mailer_factory)
- [Thorin::mailer](#Thorin::mailer)
## Thorin::mailer_config
Return a mailer configuration array
```php
$disk = Thorin::mailer_config('gmail');
```

[Full documentation](/doc/src/functions/email/t_mailer_config.md)

## Thorin::mailer_factory
Return a mailer [PHPMailer](https://github.com/PHPMailer/PHPMailer) instance of the requested mailer registered in the `email` config file
```php
$mailer = Thorin::mailer_factory('gmail');
$mailer->addAddress('john.doe@ecample.com', 'John Doe');
$mailer->isHTML(true);
// etc...
if ($mailer->send()) {
  // do something on success
} else {
  // do something on error
}
```

[Full documentation](/doc/src/functions/email/t_mailer_factory.md)

## Thorin::mailer
Return a mailer [PHPMailer](https://github.com/PHPMailer/PHPMailer) instance of the requested mailer registered in the `email` config file
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

[Full documentation](/doc/src/functions/email/t_mailer.md)
