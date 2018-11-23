<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class date extends TestCase
{
    public function testNow() {
		$carbon = Thorin::date(2018,11,21);
		$this->assertEquals(method_exists($carbon, 'addDay'), true);
	}
}
