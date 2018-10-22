<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_cache extends TestCase
{
	public function testFilesystemCache() {
		Thorin::cache('cache_item', 'hello world');
		$value = Thorin::cache('cache_item');
		$this->assertEquals($value, 'hello world');
	}
	public function testDeleteCacheItem() {
		Thorin::cache('cache_item', -1);
		$value = Thorin::cache('cache_item');
		$this->assertEquals($value, null);
	}
}
