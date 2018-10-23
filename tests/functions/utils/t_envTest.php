<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_env extends TestCase
{
    public function testGatherAnEnvironmentVariableThatExist() {
		putenv('MYVAR=Hello');
		$env = T::env('MYVAR');
		$this->assertEquals($env, 'Hello');
	}
	public function testGatherAnEnvironmentVariableThatDoesNotExist() {
		$env = T::env('MYOTHERVAR', 'world');
		$this->assertEquals($env, 'world');
	}
}
