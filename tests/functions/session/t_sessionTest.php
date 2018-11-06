<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_session extends TestCase
{
    public function testStoreASessionValue() {
		Thorin::session('hello', 'world');
		$value = Thorin::session('hello');
		$this->assertEquals('world', $value);
	}
	public function testDeleteAValue() {
		Thorin::session('hello', 'world');
		Thorin::session('hello', -1);
		$value = Thorin::session('hello');
		$this->assertEquals(null, $value);
	}
}
