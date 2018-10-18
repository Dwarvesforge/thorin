<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_is_environment extends TestCase
{
    public function testIsEnvironment() {
		$env = t_is_environment('testing','production');
		$this->assertEquals($env, true);
	}
}
