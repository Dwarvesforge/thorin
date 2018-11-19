<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_num_clamp extends TestCase
{
    public function testNumClamp() {
		$res = Thorin::num_clamp(-10, -5, 5);
		$this->assertEquals($res, -5);
	}
}
