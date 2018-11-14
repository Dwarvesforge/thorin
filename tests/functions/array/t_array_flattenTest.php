<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_flatten extends TestCase
{
    public function testArrayFlatten() {
		$res = Thorin::array_flatten([1, [2], 3, 4]);
		$this->assertEquals($res, [1, 2, 3, 4]);
	}
}
