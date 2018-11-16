<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_nth extends TestCase
{
    public function testArrayNth() {
		$res = Thorin::array_nth([1, 2, 3, 4], 2);
		$this->assertEquals($res, 3);
	}
}
