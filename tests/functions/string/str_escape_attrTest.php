<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class str_escape_attr extends TestCase
{
    public function testEscapeAString() {
		$this->assertEquals(Thorin::str_escape_attr('"hello world"'), '&quot;hello world&quot;');
	}
	public function testEscapeASimpleString() {
		$this->assertEquals(Thorin::str_escape_attr('hello world'), 'hello world');
	}
}
