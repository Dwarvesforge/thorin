<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_str_headslash extends TestCase
{
    public function testAddingHeadslash() {
		$this->assertEquals(Thorin::str_headslash('hello/world'), '/hello/world');
	}
	public function testAddingHeadslashWhenAlreadyIsAHeadslash() {
		$this->assertEquals(Thorin::str_headslash('/hello/world'), '/hello/world');
	}
}
