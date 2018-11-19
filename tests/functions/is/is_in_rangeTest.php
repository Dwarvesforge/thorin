<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_in_range extends TestCase
{
    public function testInRange() {
		$this->assertEquals(Thorin::is_in_range(2,0,4), true);
	}
}
