<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_is_odd extends TestCase
{
    public function testIsOdd() {
		$this->assertEquals(Thorin::is_odd(3), true);
	}
}
