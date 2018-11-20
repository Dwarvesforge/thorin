<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_zip_with extends TestCase
{
    public function testArrayZipWith() {
		$res = Thorin::array_zip_with([1, 2], [10, 20], [100, 200], function($a, $b, $c) { return $a + $b + $c; });
		$this->assertEquals($res, [111, 222]);
	}
}
