<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class array_max extends TestCase
{
    public function testArrayMax() {
		$res = Thorin::array_max([1,2,8,4,5]);
		$this->assertEquals($res, 8);
	}
}
