<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_is_email extends TestCase
{
    public function testAValidEmail() {
		$this->assertEquals(Thorin::is_email('john.doe@example.com'), true);
	}
	public function testAnInvalidEmail() {
		$this->assertEquals(Thorin::is_email('johndoeexample.com'), false);
	}
}
