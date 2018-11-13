<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_autolink extends TestCase
{
    public function testSimpleText() {
		$text = 'Hello world this is a nice http://google.com sample of text.';
		$newText = Thorin::autolink($text);
		$this->assertEquals($newText, 'Hello world this is a nice <a href="http://google.com">http://google.com</a> sample of text.');
	}
	public function testSimpleMailto() {
		$text = 'Hello world this is a nice olivier.bossel@gmail.com sample of text.';
		$newText = Thorin::autolink($text);
		$this->assertEquals($newText, 'Hello world this is a nice <a href="mailto:olivier.bossel@gmail.com">olivier.bossel@gmail.com</a> sample of text.');
	}
}
