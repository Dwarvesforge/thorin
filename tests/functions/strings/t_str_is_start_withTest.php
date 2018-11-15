<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_str_is_start_with extends TestCase
{
    public function testSimpleText() {
		$text = 'Hello world this is a nice sample of text.';
		$isStartWith = Thorin::str_is_start_with($text, 'Hello world');
		$this->assertEquals($isStartWith, true);
	}
}
