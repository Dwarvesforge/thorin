<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_uniq extends TestCase
{
    public function testArrayUniq() {
		$res = Thorin::array_uniq([2,1,2]);
		$this->assertEquals($res, [2,1]);
	}
}
