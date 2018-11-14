<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_without extends TestCase
{
    public function testArrayWithout() {
		$res = Thorin::array_without([1,2,3,4,5], 1, 3);
		$this->assertEquals($res, [2,4,5]);
	}
}
