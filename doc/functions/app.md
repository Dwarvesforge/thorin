# app

- [Thorin::app_domain](#Thorin_app_domain)
- [Thorin::app_environment](#Thorin_app_environment)
- [Thorin::app_name](#Thorin_app_name)
- [Thorin::app_protocol](#Thorin_app_protocol)
<a name="Thorin_app_domain"></a>
## Thorin::app_domain
Return the application domain
```php
$domain = Thorin::app_domain();
// thorin.io
```

[Full documentation](/doc/src/functions/app/app_domain.md)

<a name="Thorin_app_environment"></a>
## Thorin::app_environment
Return the application environment set in `app.environment` config
```php
$env = Thorin::app_environment();
// development
```

[Full documentation](/doc/src/functions/app/app_environment.md)

<a name="Thorin_app_name"></a>
## Thorin::app_name
Return the application name
```php
$domain = Thorin::app_name();
// Thorin application
```

[Full documentation](/doc/src/functions/app/app_name.md)

<a name="Thorin_app_protocol"></a>
## Thorin::app_protocol
Return the application protocol used to request the page
```php
$protocol = Thorin::app_protocol();
// https
```

[Full documentation](/doc/src/functions/app/app_protocol.md)
