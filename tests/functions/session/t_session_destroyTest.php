<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_session_destroy extends TestCase
{
    public function testStoreASessionValue() {
		Thorin::session('hello', 'world');
		Thorin::session_destroy();
		$value = Thorin::session('hello');
		$this->assertEquals(null, $value);
	}
	public function testStoreASessionValueAfterDestroy() {
		Thorin::session('hello', 'world');
		Thorin::session_destroy();
		Thorin::session('hello', 'coco');
		$value = Thorin::session('hello');
		$this->assertEquals('coco', $value);
	}
}
