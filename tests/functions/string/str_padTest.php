<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_str_pad extends TestCase
{
    public function testPad() {
		$this->assertEquals(Thorin::str_pad('abc',8,'_-'), '_-abc_-_');
	}
}
