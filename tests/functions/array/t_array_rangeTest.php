<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_range extends TestCase
{
    public function testArrayRange() {
		$array = Thorin::array_range(0,10);
		$this->assertEquals($array, [0,1,2,3,4,5,6,7,8,9,10]);
	}
}
