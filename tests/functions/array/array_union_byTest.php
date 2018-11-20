<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_union_by extends TestCase
{
    public function testArrayUnionBy() {
		$res = Thorin::array_union_by([2.1], [1.2, 2.3], 'floor');
		$this->assertEquals($res, [2.1, 1.2]);
	}
}
