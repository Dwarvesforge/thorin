<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_str_is_upper_case extends TestCase
{
    public function testIsUpperCase() {
		$text = 'hello world this is a nice sample of text.';
		$res = Thorin::str_is_upper_case($text);
		$this->assertEquals($res, false);
	}
	public function testIsUpperCaseTrue() {
		$text = 'HELLO WORLD';
		$res = Thorin::str_is_upper_case($text);
		$this->assertEquals($res, true);
	}
}
