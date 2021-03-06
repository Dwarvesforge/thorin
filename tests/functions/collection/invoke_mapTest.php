<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class invoke_map extends TestCase
{
    public function testInvokeMap() {
		$res = Thorin::invoke_map([[5, 1, 7], [3, 2, 1]], function($result) { sort($result); return $result;});
		$this->assertEquals($res, [[1, 5, 7], [1, 2, 3]]);
	}
}
