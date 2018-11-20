<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_unzip extends TestCase
{
    public function testArrayUnzip() {
		$zipped = [['a', 1, true], ['b', 2, false]];
		$res = Thorin::array_unzip($zipped);
		$this->assertEquals($res, [['a', 'b'], [1, 2], [true, false]]);
	}
}
