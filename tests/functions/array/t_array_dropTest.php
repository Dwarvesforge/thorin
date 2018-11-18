<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_drop extends TestCase
{
    public function testArrayDrop() {
		$res = Thorin::array_drop([1,2,3], 2);
		$this->assertEquals($res, [3]);
	}
}
