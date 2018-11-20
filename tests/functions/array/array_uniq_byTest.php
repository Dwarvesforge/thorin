<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_uniq_by extends TestCase
{
    public function testArrayUniqBy() {
		$res = Thorin::array_uniq_by([2.1, 1.2, 2.3], 'floor');
		$this->assertEquals($res, [2.1, 1.2]);
	}
}
