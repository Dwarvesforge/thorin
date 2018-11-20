<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_slice extends TestCase
{
    public function testArraySlice() {
		$array = [1,2,3,4,5];
		$array = Thorin::array_slice($array, 1, 3);
		$this->assertEquals($array, [2,3,4]);
	}
}
