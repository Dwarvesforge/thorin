<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_str_repeat extends TestCase
{
    public function testStrRepeat() {
		$this->assertEquals(Thorin::str_repeat('abc',2), 'abcabc');
	}
}
