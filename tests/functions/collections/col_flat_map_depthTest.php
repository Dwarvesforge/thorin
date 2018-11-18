<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class col_flat_map_depth extends TestCase
{
    public function testColFlatMapDepth() {
		function duplicate_depth($n) {
		  return [[[$n, $n]]];
		}
		$res = Thorin::col_flat_map_depth([1, 2], 'duplicate_depth', 2);
		$this->assertEquals($res, [[1, 1], [2, 2]]);
	}
}
