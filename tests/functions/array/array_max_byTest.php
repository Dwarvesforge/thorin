<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class array_max_by extends TestCase
{
    public function testArrayMaxBy() {
		$objects = [['n' => 1], ['n' => 2]];
		$res = Thorin::array_max_by($objects, function($o) { return $o['n']; });
		$this->assertEquals($res, ['n' => 2]);
	}
}
