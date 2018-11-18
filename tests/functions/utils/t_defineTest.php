<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_define extends TestCase
{
    public function testValidTimestamp() {
		Thorin::define('T_TEST', true);
		$this->assertEquals(T_TEST, true);
	}
}
