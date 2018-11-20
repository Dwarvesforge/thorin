<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_flatten_depth extends TestCase
{
    public function testArrayFlattenDepth() {
		$array = [1, [2, [3, [4]], 5]];
		$res = Thorin::array_flatten_depth($array, 1);
		$this->assertEquals($res, [1, 2, [3, [4]], 5]);
	}
}
