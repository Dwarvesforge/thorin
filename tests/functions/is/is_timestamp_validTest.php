<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_is_timestamp_valid extends TestCase
{
    public function testValidTimestamp() {
		$this->assertEquals(Thorin::is_timestamp_valid(2354565), true);
	}
	public function testInvalidTimestamp() {
		$this->assertEquals(Thorin::is_timestamp_valid(2354565897878889843434), false);
	}
}
