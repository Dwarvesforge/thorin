<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class hook_apply_filters extends TestCase
{
    public function testApplyFilters() {
		Thorin::hook_add_filter('hello', function($value) {
			return 'Hello ' . $value;
		});
		Thorin::hook_add_filter('hello', function($value) {
			return 'Hello ' . $value;
		});
		$res = Thorin::hook_apply_filters('hello', 'world');
		$this->assertEquals($res, 'Hello Hello world');
	}
}
