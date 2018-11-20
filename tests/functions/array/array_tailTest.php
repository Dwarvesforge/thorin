<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_tail extends TestCase
{
    public function testArrayTail() {
		$res = Thorin::array_tail([1,2,3]);
		$this->assertEquals($res, [2,3]);
	}
}
