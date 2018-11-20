# cache_factory

Create a cache pool with the driver requested. Return a [PHP-Cache](http://www.php-cache.com/en/latest/introduction/) pool to work with.
If no driver is passed, the default one in the config cache.DEFAULT_DRIVER will be used.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$driver  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The driver wanted. can be filesystem, apc, apcu, array, memcache, memcached or redis. If not specified, will take the cache.default_driver config  |  optional  |  null
$forceNewPool  |  **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }**  |  If want a new pool instead of the default one  |  optional  |  false

Return **{ [Object](http://php.net/manual/en/language.types.object.php) }** Return a cache pool object to work with. See [PHP-Cache](http://www.php-cache.com/en/latest/introduction/) for more info

### Example
```php
	$apcPool = Thorin::cache_factory('apc');
$item = $apcPool->getItem('my_item');
$item->set('hello world');
$apcPool->save($item);
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)