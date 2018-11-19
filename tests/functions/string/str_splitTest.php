<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_str_split extends TestCase
{
    public function testSplit() {
		$this->assertEquals(Thorin::str_split('a-b-c', '-', 2), ['a', 'b']);
	}
}
