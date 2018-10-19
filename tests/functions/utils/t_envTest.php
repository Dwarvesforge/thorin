<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_env extends TestCase
{
    public function testGatherAnEnvironmentVariableThatExist() {
		putenv('MYVAR=Hello');
		$env = Thorin::env('MYVAR');
		$this->assertEquals($env, 'Hello');
	}
	public function testGatherAnEnvironmentVariableThatDoesNotExist() {
		$env = Thorin::env('MYOTHERVAR', 'world');
		$this->assertEquals($env, 'world');
	}
}
