<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class count_by extends TestCase
{
    public function testCountBy() {
		$res = Thorin::count_by([6.1, 4.2, 6.3], 'floor');
		$this->assertEquals($res, ['6' => 2, '4' => 1]);
	}
}
