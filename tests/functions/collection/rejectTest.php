<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class reject extends TestCase
{
    public function testReject() {
		$users = [
		  ['user' => 'barney', 'active' => true],
		  ['user' => 'fred',   'active' => false]
		];
		$res = Thorin::reject($users, 'active');
		$this->assertEquals($res, [
			['user' => 'fred',   'active' => false]
		]);
	}
}
