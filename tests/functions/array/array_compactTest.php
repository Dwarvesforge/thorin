<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_compact extends TestCase
{
    public function testArrayCompact() {
		$res = Thorin::array_compact([0, 1, false, 2, '', 3]);
		$this->assertEquals($res, [1, 2, 3]);
	}
}
