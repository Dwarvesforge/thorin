<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_first extends TestCase
{
    public function testArrayFirst() {
		$res = Thorin::array_first([1, 2, 3, 4]);
		$this->assertEquals($res, 1);
	}
}
