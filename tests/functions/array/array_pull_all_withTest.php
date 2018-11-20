<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_pull_all_with extends TestCase
{
    public function testArrayPullAllWith() {
		$array = [[ 'x' => 1, 'y' => 2 ], [ 'x' => 3, 'y' => 4 ], [ 'x' => 5, 'y' => 6 ]];
		$array = Thorin::array_pull_all_with($array, [[ 'x' => 3, 'y' => 4 ]], 'Thorin::is_equal');
		$this->assertEquals($array, [[ 'x' => 1, 'y' => 2 ], [ 'x' => 5, 'y' => 6 ]]);
	}
}
