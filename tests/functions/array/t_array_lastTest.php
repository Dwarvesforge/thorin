<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_last extends TestCase
{
    public function testArrayLast() {
		$res = Thorin::array_last([1, 2, 3, 4]);
		$this->assertEquals($res, 4);
	}
}
