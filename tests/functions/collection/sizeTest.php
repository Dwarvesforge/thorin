<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class size extends TestCase
{
    public function testSize() {
		$user = (object) ['user' => 'barney', 'active' => true];
		$res = Thorin::size($user);
		$this->assertEquals($res, 2);
	}
}
