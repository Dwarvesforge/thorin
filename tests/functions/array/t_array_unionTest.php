<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_union extends TestCase
{
    public function testArrayUnion() {
		$res = Thorin::array_union([2],[1,2]);
		$this->assertEquals($res, [2,1]);
	}
}
