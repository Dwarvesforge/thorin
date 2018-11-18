# session

- [Thorin::session_destroy](#Thorin::session_destroy)
- [Thorin::session_flash](#Thorin::session_flash)
- [Thorin::session_id](#Thorin::session_id)
- [Thorin::session](#Thorin::session)
## Thorin::session_destroy
Destroy the whole session
```php
Thorin::session_destroy();
```

[Full documentation](/doc/src/functions/session/t_session_destroy.md)

## Thorin::session_flash
Get or set a value in session flash.
Flash mean that the value will live until the value is accessed. Then the value is killed.
```php
Thorin::session_flash('my-key', 'my value');
print Thorin::session_flash('my-key'); // my value
print Thorin::session_flash('my-key'); // null
```

[Full documentation](/doc/src/functions/session/t_session_flash.md)

## Thorin::session_id
Return the session id of the current session
```php
$sessionId = Thorin::session_id();
```

[Full documentation](/doc/src/functions/session/t_session_id.md)

## Thorin::session
Get or set a value in session
To delete the value, pass -1 as $value parameter
```php
Thorin::session('my-key', 'my value');
```

[Full documentation](/doc/src/functions/session/t_session.md)
