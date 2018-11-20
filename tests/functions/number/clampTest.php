<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class clamp extends TestCase
{
    public function testClamp() {
		$res = Thorin::clamp(-10, -5, 5);
		$this->assertEquals($res, -5);
	}
}
