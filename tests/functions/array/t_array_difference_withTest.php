<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_difference_with extends TestCase
{
    public function testArrayDifferenceWith() {
		$res = Thorin::array_difference_with(
			[[ 'x' => 1, 'y' => 2 ], [ 'x' => 2, 'y' => 1 ]],
			[[ 'x' => 1, 'y' => 2 ]],
			'Thorin::is_equal'
		);
		$this->assertEquals($res, [[ 'x' => 2, 'y' => 1 ]]);
	}
}
