<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_str_is_end_with extends TestCase
{
    public function testSimpleText() {
		$text = 'Hello world this is a nice sample of text.';
		$isEndWith = Thorin::str_is_end_with($text, 'sample of text.');
		$this->assertEquals($isEndWith, true);
	}
}
