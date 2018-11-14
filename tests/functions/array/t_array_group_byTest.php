<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_group_by extends TestCase
{
    public function testArrayGroupBy() {
		$res = Thorin::array_group_by(['one','two','three'], 'strlen');
		$this->assertEquals($res, [3 => ['one','two'], 5 => ['three']]);
	}
}
