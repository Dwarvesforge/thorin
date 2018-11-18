<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_text_to_html extends TestCase
{
    public function testTextToHtmlSingleLineString() {
		$text = Thorin::text_to_html('hello world');
		$this->assertEquals($text, '<p>hello world</p>');
	}
	public function testTextToHtmlMultipleLineString() {
		$text = Thorin::text_to_html('hello
		world');
		$this->assertEquals(Thorin::str_remove_whitespaces($text), '<p>hello<br/>world</p>');
	}
	public function testTextToHtmlMultipleParagraphsString() {
		$text = Thorin::text_to_html('hello

		world');
		$this->assertEquals(Thorin::str_remove_whitespaces($text), '<p>hello</p><p>world</p>');
	}
}
