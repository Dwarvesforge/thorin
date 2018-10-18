<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_get_environment extends TestCase
{
    public function testDefaultEnvironment() {
		$env = t_get_environment();
		$this->assertEquals($env, 'production');
	}
}
