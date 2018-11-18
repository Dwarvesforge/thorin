# collections

- [Thorin::collect](#Thorin::collect)
<a name="Thorin::collect"></a>
## Thorin::collect
Create a [collection instance](https://laravel.com/docs/5.7/collections#available-methods) to work with from the passed array.
```php
Thorin::collect(['taylor', 'abigail', null])
->reject(function ($name) {
  return empty($name);
})
```

[Full documentation](/doc/src/functions/collections/t_collect.md)

[See more](https://packagist.org/packages/tightenco/collect)
