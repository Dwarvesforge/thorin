<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_str_random extends TestCase
{
    public function testRandomStringLength() {
		$this->assertEquals(strlen(Thorin::str_random(20)), 20);
	}
}
