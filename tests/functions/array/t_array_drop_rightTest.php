<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_drop_right extends TestCase
{
    public function testArrayDropRight() {
		$res = Thorin::array_drop_right([1,2,3], 2);
		$this->assertEquals($res, [1]);
	}
}
