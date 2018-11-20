<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_pull_all_by extends TestCase
{
    public function testArrayPullAllBy() {
		$array = [[ 'x' => 1 ], [ 'x' => 2 ], [ 'x' => 3 ], [ 'x' => 1 ]];
		$array = Thorin::array_pull_all_by($array, [[ 'x' => 1 ], [ 'x' => 3 ]], 'x');
		$this->assertEquals($array, [[ 'x' => 2 ]]);
	}
}
