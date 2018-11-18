# security

- [Thorin::csrf_input](#Thorin::csrf_input)
- [Thorin::csrf_qs](#Thorin::csrf_qs)
- [Thorin::csrf_token](#Thorin::csrf_token)
- [Thorin::csrf_validate](#Thorin::csrf_validate)
<a name="Thorin::csrf_input"></a>
## Thorin::csrf_input
Generate a CSRF input hidden field
```php
$myInput = Thorin::csrf_input();
```

[Full documentation](/doc/src/functions/security/t_csrf_input.md)

[See more](https://packagist.org/packages/volnix/csrf)

<a name="Thorin::csrf_qs"></a>
## Thorin::csrf_qs
Generate a CSRF query string
```php
$myQueryString = Thorin::csrf_qs();
```

[Full documentation](/doc/src/functions/security/t_csrf_qs.md)

[See more](https://packagist.org/packages/volnix/csrf)

<a name="Thorin::csrf_token"></a>
## Thorin::csrf_token
Return the token for the given name, or the default token if no name is provided
```php
$token = Thorin::csrf_token();
```

[Full documentation](/doc/src/functions/security/t_csrf_token.md)

[See more](https://packagist.org/packages/volnix/csrf)

<a name="Thorin::csrf_validate"></a>
## Thorin::csrf_validate
Validate a CSRF token in a passed stack like $_POST, $_GET, or an array.
By default it will validate the CSRF token in the $_POST stack.

```php
if (Thorin::csrf_validate()) {
  // do something if valid
} else {
  // handle error
}
```

[Full documentation](/doc/src/functions/security/t_csrf_validate.md)

[See more](https://packagist.org/packages/volnix/csrf)
