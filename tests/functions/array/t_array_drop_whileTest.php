<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_drop_while extends TestCase
{
    public function testArrayDropWhile() {
		$res = Thorin::array_drop_while([1,2,3,4], function($item) {
			return $item <= 2;
		});
		$this->assertEquals($res, [3,4]);
	}
}
