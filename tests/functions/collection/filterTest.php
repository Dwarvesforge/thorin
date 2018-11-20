<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class filter extends TestCase
{
    public function testFilter() {
		$users = [
		   [ 'user' => 'barney', 'age' => 36, 'active' => true],
		   [ 'user' => 'fred',   'age' => 40, 'active' => false]
		];
		$res = Thorin::filter($users, function($o) { return !$o['active']; });
		$this->assertEquals($res, [
			[ 'user' => 'fred',   'age' => 40, 'active' => false]
		]);
	}
}
