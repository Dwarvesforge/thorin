<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class now extends TestCase
{
    public function testNow() {
		$carbon = Thorin::now();
		$this->assertEquals(method_exists($carbon, 'addDay'), true);
	}
}
