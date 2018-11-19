<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class col_flat_map_deep extends TestCase
{
    public function testColFlatMapDeep() {
		function duplicate_deep($n) {
		  return [[[$n, $n]]];
		}
		$res = Thorin::col_flat_map_deep([1, 2], 'duplicate_deep');
		$this->assertEquals($res, [1,1,2,2]);
	}
}
