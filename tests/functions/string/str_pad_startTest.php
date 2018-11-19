<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_str_pad_start extends TestCase
{
    public function testPadStart() {
		$this->assertEquals(Thorin::str_pad_start('abc',6,'_-'), '_-_abc');
	}
}
