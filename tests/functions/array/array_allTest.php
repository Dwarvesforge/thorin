<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_all extends TestCase
{
    public function testArrayAll() {
		$res = Thorin::array_all([1,2,3,4,5], function($item) {
			return $item < 10;
		});
		$this->assertEquals($res, true);
	}
}
