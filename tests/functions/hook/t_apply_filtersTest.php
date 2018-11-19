<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_apply_filters extends TestCase
{
    public function testApplyFilters() {
		Thorin::add_filter('hello', function($value) {
			return 'Hello ' . $value;
		});
		Thorin::add_filter('hello', function($value) {
			return 'Hello ' . $value;
		});
		$res = Thorin::apply_filters('hello', 'world');
		$this->assertEquals($res, 'Hello Hello world');
	}
}
