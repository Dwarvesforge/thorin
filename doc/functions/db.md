# db

- [Thorin::db_boot_eloquent](#Thorin::db_boot_eloquent)
- [Thorin::db_connection_config](#Thorin::db_connection_config)
- [Thorin::db_connection_factory](#Thorin::db_connection_factory)
- [Thorin::db_eloquent_capsule](#Thorin::db_eloquent_capsule)
- [Thorin::db](#Thorin::db)
<a name="Thorin::db_boot_eloquent"></a>
## Thorin::db_boot_eloquent
Boot the eloquent framework
```php
Thorin::db_boot_eloquent();
```

[Full documentation](/doc/src/functions/db/t_db_boot_eloquent.md)

<a name="Thorin::db_connection_config"></a>
## Thorin::db_connection_config
Return a db connection configuration array
```php
$config = Thorin::db_connection_config('db1');
```

[Full documentation](/doc/src/functions/db/t_db_connection_config.md)

<a name="Thorin::db_connection_factory"></a>
## Thorin::db_connection_factory
Return eloquent connection [Illuminate\Database\Connection](https://laravel.com/api/5.3/Illuminate/Database/Connection.html) instance of the requested connection
```php
$db = Thorin::db_connection_factory('mysql');
$users = $db->table('users')->get();
```

[Full documentation](/doc/src/functions/db/t_db_connection_factory.md)

<a name="Thorin::db_eloquent_capsule"></a>
## Thorin::db_eloquent_capsule
Boot the eloquent ORM with the db.connections configurations
```php
Thorin::db_boot_eloquent();
```

[Full documentation](/doc/src/functions/db/t_db_eloquent_capsule.md)

<a name="Thorin::db"></a>
## Thorin::db
Return eloquent connection [Illuminate\Database\Connection](https://laravel.com/api/5.3/Illuminate/Database/Connection.html) instance of the requested connection
```php
$db = Thorin::db('mysql');
$users = $db->table('users')->get();
```

[Full documentation](/doc/src/functions/db/t_db.md)
