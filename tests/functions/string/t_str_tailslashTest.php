<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_str_tailslash extends TestCase
{
    public function testAddingTailslash() {
		$this->assertEquals(Thorin::str_tailslash('hello/world'), 'hello/world/');
	}
	public function testAddingTailslashWhenAlreadyIsATailslash() {
		$this->assertEquals(Thorin::str_tailslash('hello/world/'), 'hello/world/');
	}
}
