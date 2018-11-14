<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_find_last extends TestCase
{
    public function testArrayFindLast() {
		$res = Thorin::array_find_last([1, 2, 3, 4], function($item) {
			return ($item % 2) === 1;
		});
		$this->assertEquals($res, 3);
	}
}
