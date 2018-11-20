<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class environment extends TestCase
{
    public function testEnvironment() {
		$env = Thorin::environment();
		$this->assertEquals($env, 'production');
	}
}
