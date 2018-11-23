<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class datetime_test extends TestCase
{
    public function testDatetime() {
		$carbon = Thorin::datetime(2018,11,21,23,21,30);
		$this->assertEquals(method_exists($carbon, 'addDay'), true);
	}
}
