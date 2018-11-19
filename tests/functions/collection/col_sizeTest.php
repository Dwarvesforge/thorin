<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class col_size extends TestCase
{
    public function testColSize() {
		$user = (object) ['user' => 'barney', 'active' => true];
		$res = Thorin::col_size($user);
		$this->assertEquals($res, 2);
	}
}
