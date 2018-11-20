# cache

Get/Set a cache item quickly with this cache helper function.
Allows to add, edit or delete any cache item quickly.
To delete, pass -1 as value parameter.
The key will automatically bein hashed using sha1.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$key  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The cache item key to work with  |  required  |
$value  |  **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }**  |  The value to save  |  optional  |  null
$expiresAfter  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The lifetime of the item in the cache in seconds  |  optional  |  null
$driver  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The driver to use for caching the value. If not set, will use the default driver set in config cache.default_driver  |  optional  |  null

### Example
```php
	Thorin::cache('my_item', 'hello world', 60);
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)