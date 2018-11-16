<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_concat extends TestCase
{
    public function testArrayConcat() {
		$res = Thorin::array_concat([1], 2, [3], [[4]]);
		$this->assertEquals($res, [1, 2, 3, [4]]);
	}
}
