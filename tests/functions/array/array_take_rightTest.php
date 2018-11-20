<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_take_right extends TestCase
{
    public function testArrayTakeRight() {
		$res = Thorin::array_take_right([1,2,3,4,5],2);
		$this->assertEquals($res, [4,5]);
	}
}
