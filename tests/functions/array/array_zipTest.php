<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_zip extends TestCase
{
    public function testArrayZip() {
		$res = Thorin::array_zip(['a', 'b'], [1, 2], [true, false]);
		$this->assertEquals($res, [['a', 1, true], ['b', 2, false]]);
	}
}
