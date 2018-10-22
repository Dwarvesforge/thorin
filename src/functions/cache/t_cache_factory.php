<?php

use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;
use Cache\Adapter\Filesystem\FilesystemCachePool;
use Cache\Adapter\Apc\ApcCachePool;
use Cache\Adapter\Apcu\ApcuCachePool;
use Cache\Adapter\PHPArray\ArrayCachePool;
use Cache\Adapter\Memcache\MemcacheCachePool;
use Cache\Adapter\Memcached\MemcachedCachePool;
use Cache\Adapter\Redis\RedisCachePool;

/**
 * Create a cache pool with the driver requested. Return a [PHP-Cache](http://www.php-cache.com/en/latest/introduction/) pool to work with.
 * If no driver is passed, the default one in the config cache.DEFAULT_DRIVER will be used.
 * @param    {String}    [$driver=null]    The driver wanted. can be filesystem, apc, apcu, array, memcache, memcached or redis
 * @param    {Boolean}    [$forceNewPool=false]    If want a new pool instead of the  default one
 *
 * @example    php
 * $apcPool = Thorin::cache_factory('apc');
 * $item = $apcPool->getItem('my_item');
 * $item->set('hello world');
 * $apcPool->store($item);
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
$t_pools = [];
function t_cache_factory($driver = null, $forceNewPool = false) {
	global $t_pools;
	// make sure the driver passed in in lowercase
	if ($driver) $driver = strtolower($driver);
	// check if a pool already exist with this driver
	if ( ! $forceNewPool && isset($t_pools[$driver])) {
		// return the cached pool
		return $t_pools[$driver];
	}

	// switch on the requested driver to create a new pool
	switch($driver) {
		case 'filesystem':
			$filesystemAdapter = new Local(Thorin::sanitize_path(Thorin::config('paths.CACHE')));
			$filesystem        = new Filesystem($filesystemAdapter);
			$pool = new FilesystemCachePool($filesystem);
		break;
		case 'apc':
			$pool = new ApcCachePool();
		break;
		case 'apcu':
			$pool = new ApcuCachePool();
		break;
		case 'array':
			$pool = new ArrayCachePool();
		break;
		case 'memcache':
			$client = new Memcache();
			$client->connect(Thorin::config('cache.MEMCACHE.HOST'), Thorin::config('cache.MEMCACHE.PORT'));
			$pool = new MemcacheCachePool($client);
		break;
		case 'memcached':
			$client = new \Memcached();
			$client->addServer(Thorin::config('cache.MEMCACHED.HOST'), Thorin::config('cache.MEMCACHED.PORT'));
			$pool = new MemcachedCachePool($client);
		break;
		case 'redis':
			$client = new \Redis();
			$client->connect(Thorin::config('cache.REDIS.HOST'), Thorin::config('cache.REDIS.PORT'));
			$pool = new RedisCachePool($client);
		break;
		default:
			$pool = Thorin::cache_factory(Thorin::config('cache.DEFAULT_DRIVER'));
		break;
	}
	// save pool in stack to avoid creating multiple pool of the same driver
	$t_pools[$driver] = $pool;
	// return the pool
	return $pool;
}
