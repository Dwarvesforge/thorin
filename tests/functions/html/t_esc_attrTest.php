<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_esc_attr extends TestCase
{
    public function testEscapeAString() {
		$this->assertEquals(Thorin::esc_attr('"hello world"'), '&quot;hello world&quot;');
	}
	public function testEscapeASimpleString() {
		$this->assertEquals(Thorin::esc_attr('hello world'), 'hello world');
	}
}
