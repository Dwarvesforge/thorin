<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_str_pad_end extends TestCase
{
    public function testPadEnd() {
		$this->assertEquals(Thorin::str_pad_end('abc',6,'_-'), 'abc_-_');
	}
}
