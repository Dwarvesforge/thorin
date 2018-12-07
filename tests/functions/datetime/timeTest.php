<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class time_test extends TestCase
{
    public function testTime() {
		$carbon = Thorin::time(23,21,30);
		$this->assertEquals(method_exists($carbon, 'addDay'), true);
	}
}
