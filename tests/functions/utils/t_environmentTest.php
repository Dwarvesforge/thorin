<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_environment extends TestCase
{
    public function testDefaultEnvironment() {
		$env = T::environment();
		$this->assertEquals($env, 'development');
	}
}
