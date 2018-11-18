<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_uniq_with extends TestCase
{
    public function testArrayUniqWith() {
		$objects = [['x' => 1, 'y' => 2], ['x' => 2, 'y' => 1], ['x' => 1, 'y' => 2]];
		$res = Thorin::array_uniq_with($objects, 'Thorin::is_equal');
		$this->assertEquals($res, [['x' => 1, 'y' => 2], ['x' => 2, 'y' => 1]]);
	}
}
