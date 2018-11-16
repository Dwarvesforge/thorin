<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_drop_left_while extends TestCase
{
    public function testArrayDropLeftWhile() {
		$res = Thorin::array_drop_left_while([1,2,3,4], function($item) {
			return $item <= 2;
		});
		$this->assertEquals($res, [3,4]);
	}
}
