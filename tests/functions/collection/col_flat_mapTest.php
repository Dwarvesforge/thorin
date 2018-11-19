<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class col_flat_map extends TestCase
{
    public function testColFlatMap() {
		function duplicate($n) {
		  return [$n, $n];
		}
		$res = Thorin::col_flat_map([1, 2], 'duplicate');
		$this->assertEquals($res, [1,1,2,2]);
	}
}
