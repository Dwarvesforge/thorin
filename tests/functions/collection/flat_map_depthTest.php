<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class flat_map_depth extends TestCase
{
    public function testFlatMapDepth() {
		function duplicate_depth($n) {
		  return [[[$n, $n]]];
		}
		$res = Thorin::flat_map_depth([1, 2], 'duplicate_depth', 2);
		$this->assertEquals($res, [[1, 1], [2, 2]]);
	}
}
