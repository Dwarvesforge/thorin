<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_drop_right_while extends TestCase
{
    public function testArrayDropRightWhile() {
		$res = Thorin::array_drop_right_while([1,2,3,4], function($item) {
			return $item > 2;
		});
		$this->assertEquals($res, [1,2]);
	}
}
