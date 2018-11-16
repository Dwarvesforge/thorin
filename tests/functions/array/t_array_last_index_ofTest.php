<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_last_index_of extends TestCase
{
    public function testArrayLastIndexOf() {
		$res = Thorin::array_last_index_of([1, 2, 1, 2], 2);
		$this->assertEquals($res, 3);
	}
}
