<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_unzip_with extends TestCase
{
    public function testArrayUnzipWith() {
		$zipped = [[1, 10, 100], [2, 20, 200]];
		$res = Thorin::array_unzip_with($zipped, function($a, $b) {
			return $a + $b;
		});
		$this->assertEquals($res, [3, 30, 300]);
	}
}
