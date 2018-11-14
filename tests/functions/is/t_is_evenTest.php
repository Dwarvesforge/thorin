<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_is_even extends TestCase
{
    public function testIsEven() {
		$this->assertEquals(Thorin::is_even(2), true);
	}
}
