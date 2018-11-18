# hooks

- [Thorin::add_action](#Thorin_add_action)
- [Thorin::add_filter](#Thorin_add_filter)
- [Thorin::apply_filter](#Thorin_apply_filter)
- [Thorin::do_action](#Thorin_do_action)
<a name="Thorin_add_action"></a>
## Thorin::add_action
Add an action linked to a callback that will be called when the `t_do_action` with the same name is called.
```php
Thorin::add_action('my-action', function() {
  // do something
});
```

[Full documentation](/doc/src/functions/hooks/t_add_action.md)

[See more](https://packagist.org/packages/voku/php-hooks)

<a name="Thorin_add_filter"></a>
## Thorin::add_filter
Hooks a function or method to a specific filter action.
```php
Thorin::add_filter('my-filter', function($value) {
  return 'Hello ' . $value;
});
```

[Full documentation](/doc/src/functions/hooks/t_add_filter.md)

[See more](https://packagist.org/packages/voku/php-hooks)

<a name="Thorin_apply_filters"></a>
## Thorin::apply_filters
Call the functions added to a filter hook.
```php
Thorin::add_filter('my-filter', function($value) {
  return 'Hello ' . $value;
});
print Thorin::apply_filters('my-filter', 'world'); // Hello world
```

[Full documentation](/doc/src/functions/hooks/t_apply_filter.md)

[See more](https://packagist.org/packages/voku/php-hooks)

<a name="Thorin_do_action"></a>
## Thorin::do_action
Execute all the corresponding actions registered with the `t_add_action` function.
```php
Thorin::do_action('my-action');
```

[Full documentation](/doc/src/functions/hooks/t_do_action.md)

[See more](https://packagist.org/packages/voku/php-hooks)
