<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_difference_by extends TestCase
{
    public function testArrayDifferenceBy() {
		$res = Thorin::array_difference_by([2.1, 1.2], [2.3, 3.4], 'floor');
		$this->assertEquals($res, [1.2]);
	}
}
