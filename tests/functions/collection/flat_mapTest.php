<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class flat_map extends TestCase
{
    public function testFlatMap() {
		function duplicate($n) {
		  return [$n, $n];
		}
		$res = Thorin::flat_map([1, 2], 'duplicate');
		$this->assertEquals($res, [1,1,2,2]);
	}
}
