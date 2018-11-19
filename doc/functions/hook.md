# hook

- [Thorin::hook_add_action](#Thorin_hook_add_action)
- [Thorin::hook_add_filter](#Thorin_hook_add_filter)
- [Thorin::hook_apply_filter](#Thorin_hook_apply_filter)
- [Thorin::hook_do_action](#Thorin_hook_do_action)
<a name="Thorin_hook_add_action"></a>
## Thorin::hook_add_action
Add an action linked to a callback that will be called when the `t_do_action` with the same name is called.
```php
Thorin::hook_add_action('my-action', function() {
  // do something
});
```

[Full documentation](/doc/src/functions/hook/hook_add_action.md)

[See more](https://packagist.org/packages/voku/php-hooks)

<a name="Thorin_hook_add_filter"></a>
## Thorin::hook_add_filter
Hooks a function or method to a specific filter action.
```php
Thorin::hook_add_filter('my-filter', function($value) {
  return 'Hello ' . $value;
});
```

[Full documentation](/doc/src/functions/hook/hook_add_filter.md)

[See more](https://packagist.org/packages/voku/php-hooks)

<a name="Thorin_hook_apply_filters"></a>
## Thorin::hook_apply_filters
Call the functions added to a filter hook.
```php
Thorin::hook_add_filter('my-filter', function($value) {
  return 'Hello ' . $value;
});
print Thorin::hook_apply_filters('my-filter', 'world'); // Hello world
```

[Full documentation](/doc/src/functions/hook/hook_apply_filter.md)

[See more](https://packagist.org/packages/voku/php-hooks)

<a name="Thorin_hook_do_action"></a>
## Thorin::hook_do_action
Execute all the corresponding actions registered with the `t_add_action` function.
```php
Thorin::hook_do_action('my-action');
```

[Full documentation](/doc/src/functions/hook/hook_do_action.md)

[See more](https://packagist.org/packages/voku/php-hooks)
