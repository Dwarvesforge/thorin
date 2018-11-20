<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class memoize extends TestCase
{
    public function testMemoize() {
		$memoized = Thorin::memoize(function($x) {
			return $x + 10;
		});
		$memoized(5);
		$memoized(6);
		$res = $memoized(5);
		$this->assertEquals($res, 15);
	}
}
