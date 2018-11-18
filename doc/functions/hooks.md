# hooks

- [Thorin::add_action](#Thorin::add_action)
- [Thorin::add_filter](#Thorin::add_filter)
- [Thorin::apply_filter](#Thorin::apply_filter)
- [Thorin::do_action](#Thorin::do_action)
## Thorin::add_action
Add an action linked to a callback that will be called when the `t_do_action` with the same name is called.
```php
Thorin::add_action('my-action', function() {
  // do something
});
```

[Full documentation](/doc/src/functions/hooks/t_add_action.md)

[See more](https://packagist.org/packages/voku/php-hooks)

## Thorin::add_filter
Hooks a function or method to a specific filter action.
```php
Thorin::add_filter('my-filter', function($value) {
  return 'Hello ' . $value;
});
```

[Full documentation](/doc/src/functions/hooks/t_add_filter.md)

[See more](https://packagist.org/packages/voku/php-hooks)

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

## Thorin::do_action
Execute all the corresponding actions registered with the `t_add_action` function.
```php
Thorin::do_action('my-action');
```

[Full documentation](/doc/src/functions/hooks/t_do_action.md)

[See more](https://packagist.org/packages/voku/php-hooks)
