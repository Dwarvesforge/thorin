<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_config extends TestCase
{
    public function testGetASimpleConfig() {
		$value = Thorin::config('app.domain');
		$this->assertEquals($value, 'thorin.io');
	}
	public function testGetAComplexeConfig() {
		$value = Thorin::config('app.root_url');
		$this->assertEquals($value, 'http://thorin.io');
	}
}
