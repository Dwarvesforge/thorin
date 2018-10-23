<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_cache extends TestCase
{
	public function testFilesystemCache() {
		T::cache('cache_item', 'hello world');
		$value = T::cache('cache_item');
		$this->assertEquals($value, 'hello world');
	}
	public function testDeleteCacheItem() {
		T::cache('cache_item', -1);
		$value = T::cache('cache_item');
		$this->assertEquals($value, null);
	}
	public function testExpireCacheItem() {
		T::cache('cache_item', 'hello world', 1);
		sleep(2);
		$value = T::cache('cache_item');
		$this->assertEquals($value, null);
	}
}
