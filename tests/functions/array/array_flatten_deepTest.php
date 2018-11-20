<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_flatten_deep extends TestCase
{
    public function testArrayFlattenDeep() {
		$res = Thorin::array_flatten_deep([1, [2, [3, [4]], 5]]);
		$this->assertEquals($res, [1, 2, 3, 4, 5]);
	}
}
