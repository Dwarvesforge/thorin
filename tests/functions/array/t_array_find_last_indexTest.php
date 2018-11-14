<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_find_last_index extends TestCase
{
    public function testArrayFindLastIndex() {
		$res = Thorin::array_find_last_index([1, 2, 3, 4], function ($n) {
			return ($n % 2) === 1;
		});
		$this->assertEquals($res, 2);
	}
}
