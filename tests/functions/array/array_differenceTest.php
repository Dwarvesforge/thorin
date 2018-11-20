<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_difference extends TestCase
{
    public function testArrayDifference() {
		$res = Thorin::array_difference([2, 1], [2, 3]);
		$this->assertEquals($res, [1]);
	}
}
