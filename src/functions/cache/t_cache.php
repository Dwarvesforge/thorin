<?php
/**
 * Get/Set a cache item quickly with this cache helper function.
 * @param    {String}    $key    The cache item key to work with
 * @param    {Mixed}    [$value=null]    The value to save
 * @param    {Integer}    [$expireAfter=null]    The lifetime of the item in the cache in seconds
 * @param    {String}    [$driver=null]    The driver to use for caching the value. If not set, will use the default driver set in config cache.DEFAULT_DRIVER
 *
 * @example    php
 * Thorin::cache('my_item', 'hello world', 60);
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function t_cache($key, $value = null, $expireAfter = null, $driver = null) {
	// generate a key
	$key = sha1($key);
	// create a cache pool
	$pool = Thorin::cache_factory($driver);
	// get the item
	$item = $pool->getItem($key);
	// if we have a value, store this value
	if ($value && $value !== -1) {
		$item->set($value);
		if (is_integer($expireAfter)) {
			$item->expireAfter($expireAfter);
		}
		$pool->save($item);
	} else if ($value === -1 && $pool->hasItem($key)) {
		print 'delete item';
		// delete the item
		$pool->deleteItem($key);
	} else if ($value === null && $pool->hasItem($key)) {
		return $item->get();
	}
}
