<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_take extends TestCase
{
    public function testArrayTake() {
		$res = Thorin::array_take([1,2,3,4,5],2);
		$this->assertEquals($res, [1,2]);
	}
}
