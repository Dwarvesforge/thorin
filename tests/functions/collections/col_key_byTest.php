<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class col_key_by extends TestCase
{
    public function testColKeyBy() {
		$array = [
		  ['direction' => 'left', 'code' => 97],
		  ['direction' => 'right', 'code' => 100],
		];
		$res = Thorin::col_key_by($array, function ($o) { return \chr($o['code']); });
		$this->assertEquals($res, ['a' => ['direction' => 'left', 'code' => 97], 'd' => ['direction' => 'right', 'code' => 100]]);
	}
}
