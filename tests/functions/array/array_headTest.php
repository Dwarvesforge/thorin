<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_head extends TestCase
{
    public function testArrayHead() {
		$res = Thorin::array_head([1,2,3]);
		$this->assertEquals($res, [1,2]);
	}
}
