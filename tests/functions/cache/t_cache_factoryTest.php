<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_cache_factory extends TestCase
{
	public function testFilesystemCache() {
		$cache = Thorin::cache_factory('filesystem');
		$item = $cache->getItem('my_item');
		$item->set('hello world');
		$cache->save($item);
		$this->assertEquals($cache->hasItem('my_item'), true);
	}
	public function testArrayCache() {
		$cache = Thorin::cache_factory('array');
		$item = $cache->getItem('my_item');
		$item->set('hello world');
		$cache->save($item);
		$this->assertEquals($cache->hasItem('my_item'), true);
	}
	public function testMultipleArrayCache() {
		$cache = Thorin::cache_factory('array');
		$item = $cache->getItem('my_item');
		$item->set('hello world');
		$cache->save($item);
		$newCache = Thorin::cache_factory('array');
		$this->assertEquals($newCache->hasItem('my_item'), true);
	}
	public function testMultipleArrayWitnForceNewPoolCache() {
		$cache = Thorin::cache_factory('array');
		$item = $cache->getItem('my_item');
		$item->set('hello world');
		$cache->save($item);
		$newCache = Thorin::cache_factory('array', true);
		$this->assertEquals($newCache->hasItem('my_item'), false);
	}
}
