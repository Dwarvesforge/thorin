<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_esc_attr extends TestCase
{
    public function testEscapeAString() {
		$this->assertEquals(t_esc_attr('"hello world"'), '&quot;hello world&quot;');
	}
	public function testEscapeASimpleString() {
		$this->assertEquals(t_esc_attr('hello world'), 'hello world');
	}
}
