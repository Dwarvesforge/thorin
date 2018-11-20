<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class map extends TestCase
{
    public function testMap() {
		function square(int $n) {
			return $n * $n;
		}
		$res = Thorin::map([4, 8], 'square');
		$this->assertEquals($res, [16, 64]);
	}
}
