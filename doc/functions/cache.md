# cache

- [Thorin::cache_factory](#Thorin_cache_factory)
- [Thorin::cache](#Thorin_cache)
<a name="Thorin_cache_factory"></a>
## Thorin::cache_factory
Create a cache pool with the driver requested. Return a [PHP-Cache](http://www.php-cache.com/en/latest/introduction/) pool to work with.
If no driver is passed, the default one in the config cache.DEFAULT_DRIVER will be used.
```php
$apcPool = Thorin::cache_factory('apc');
$item = $apcPool->getItem('my_item');
$item->set('hello world');
$apcPool->save($item);
```

[Full documentation](/doc/src/functions/cache/cache_factory.md)

<a name="Thorin_cache"></a>
## Thorin::cache
Get/Set a cache item quickly with this cache helper function.
Allows to add, edit or delete any cache item quickly.
To delete, pass -1 as value parameter.
The key will automatically bein hashed using sha1.
```php
Thorin::cache('my_item', 'hello world', 60);
```

[Full documentation](/doc/src/functions/cache/cache.md)
