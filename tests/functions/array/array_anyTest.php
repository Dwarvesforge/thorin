<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_any extends TestCase
{
    public function testArrayAny() {
		$res = Thorin::array_any([1,20,30,40,50], function($item) {
			return $item < 10;
		});
		$this->assertEquals($res, true);
	}
}
