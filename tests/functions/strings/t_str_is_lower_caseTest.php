<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_str_is_lower_case extends TestCase
{
    public function testIsLowerCase() {
		$text = 'hello world this is a nice sample of text.';
		$res = Thorin::str_is_lower_case($text);
		$this->assertEquals($res, true);
	}
}
