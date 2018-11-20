<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class add_filter extends TestCase
{
    public function testAddFilter() {
		Thorin::add_filter('my-filter-1', function($value) {
			return 'Hello ' . $value;
		});
		$res = Thorin::apply_filters('my-filter-1', 'world');
		$this->assertEquals($res, 'Hello world');
	}
}
