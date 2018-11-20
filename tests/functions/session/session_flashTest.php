<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_session_flash extends TestCase
{
    public function testStoreAFlashValue() {
		Thorin::session_flash('hello', 'world');
		$value = Thorin::session_flash('hello');
		$this->assertEquals('world', $value);
	}
	public function testKilledFlashValue() {
		Thorin::session_flash('my-value', 'world');
		Thorin::session_flash('my-value');
		$value = Thorin::session_flash('my-value');
		$this->assertEquals(null, $value);
	}
}
