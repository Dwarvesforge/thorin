<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class col_reject extends TestCase
{
    public function testColReject() {
		$users = [
		  ['user' => 'barney', 'active' => true],
		  ['user' => 'fred',   'active' => false]
		];
		$res = Thorin::col_reject($users, 'active');
		$this->assertEquals($res, [
			['user' => 'fred',   'active' => false]
		]);
	}
}
