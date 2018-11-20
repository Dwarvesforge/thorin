<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class app_environment extends TestCase
{
    public function testAppEnvironment() {
		$env = Thorin::app_environment();
		$this->assertEquals($env, 'production');
	}
}
