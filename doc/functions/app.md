# app

- [Thorin::app_build](#Thorin_app_build)
- [Thorin::app_domain](#Thorin_app_domain)
- [Thorin::app_name](#Thorin_app_name)
- [Thorin::app_protocol](#Thorin_app_protocol)
<a name="Thorin_app_build"></a>
## Thorin::app_build
Return the application build version.
The build version will be taken either from:
1. `config` The `app.build` config
2. `txt` A file at the project root called `build.txt`
3. `hash` Generating a hash from the `path.assets` folder

```php
$domain = Thorin::app_build();
// 3jdujfh5g3jsd0w0s7c6nr57s3gv1yxk
```

[Full documentation](/doc/src/functions/app/app_build.md)

<a name="Thorin_app_domain"></a>
## Thorin::app_domain
Return the application domain
```php
$domain = Thorin::app_domain();
// thorin.io
```

[Full documentation](/doc/src/functions/app/app_domain.md)

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
