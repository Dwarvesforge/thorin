<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_intersection extends TestCase
{
    public function testArrayIntersection() {
		$res = Thorin::array_intersection([2, 1], [2, 3]);
		$this->assertEquals($res, [2]);
	}
}
