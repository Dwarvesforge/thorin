# recaptcha

- [Thorin::recaptcha_display](#Thorin::recaptcha_display)
- [Thorin::recaptcha_factory](#Thorin::recaptcha_factory)
- [Thorin::recaptcha_verify](#Thorin::recaptcha_verify)
<a name="Thorin::recaptcha_display"></a>
## Thorin::recaptcha_display
Display a recaptcha using the configured secret, sitekey, lang and attributes
```php
print Thorin::recaptcha_display();
```

[Full documentation](/doc/src/functions/recaptcha/t_recaptcha_display.md)

[See more](https://github.com/ARCANEDEV/noCAPTCHA)

<a name="Thorin::recaptcha_factory"></a>
## Thorin::recaptcha_factory
Create a Arcanedev\NoCaptcha\NoCaptcha nocaptcha instance to work with.
```php
$nocaptcha = Thorin::nocaptcha_factory();
```

[Full documentation](/doc/src/functions/recaptcha/t_recaptcha_factory.md)

[See more](https://github.com/ARCANEDEV/noCAPTCHA)

<a name="Thorin::recaptcha_verify"></a>
## Thorin::recaptcha_verify
Verify that the recaptcha has been checked.
```php
if (Thorin::recaptcha_verify()) {
   // recaptcha verified!
} else {
   // recaptcha verification failed
}
```

[Full documentation](/doc/src/functions/recaptcha/t_recaptcha_verify.md)

[See more](https://github.com/ARCANEDEV/noCAPTCHA)
