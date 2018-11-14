<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_drop_left extends TestCase
{
    public function testArrayDropLeft() {
		$res = Thorin::array_drop_left([1,2,3], 2);
		$this->assertEquals($res, [3]);
	}
}
