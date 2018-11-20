<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_index_of extends TestCase
{
    public function testArrayIndexOf() {
		$res = Thorin::array_index_of([1,2,3], 2);
		$this->assertEquals($res, 1);
	}
}
