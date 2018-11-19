<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class col_map extends TestCase
{
    public function testColap() {
		function square(int $n) {
			return $n * $n;
		}
		$res = Thorin::col_map([4, 8], 'square');
		$this->assertEquals($res, [16, 64]);
	}
}
