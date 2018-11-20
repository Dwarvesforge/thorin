<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class group_by extends TestCase
{
    public function testGroupBy() {
		$res = Thorin::group_by([6.1, 4.2, 6.3], 'floor');
		$this->assertEquals($res, ['6' => [6.1, 6.3], '4' => [4.2]]);
	}
}
