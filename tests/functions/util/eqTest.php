<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_eq extends TestCase
{
    public function testEq() {
		$res = Thorin::eq([1,2],[1,2]);
		$this->assertEquals($res, true);
	}
}
