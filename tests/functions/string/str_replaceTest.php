<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_str_replace extends TestCase
{
    public function testStrReplace() {
		$this->assertEquals(Thorin::str_replace('Hi Fred', 'Fred', 'Barney'), 'Hi Barney');
	}
}
