<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class fn_negate extends TestCase
{
    public function testNegate() {
		$isEven = 'Thorin::is_even';
		$res = Thorin::col_filter([1, 2, 3, 4, 5, 6], Thorin::fn_negate($isEven));
		$this->assertEquals($res, [1, 3, 5]);
	}
}
