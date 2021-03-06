<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_union_with extends TestCase
{
    public function testArrayUnionWith() {
		$objects = [['x' => 1, 'y' => 2], ['x' => 2, 'y' => 1]];
		$others = [['x' => 1, 'y' => 1], ['x' => 1, 'y' => 2]];
		$res = Thorin::array_union_with($objects, $others, 'Thorin::is_equal');
		$this->assertEquals($res, [['x' => 1, 'y' => 2], ['x' => 2, 'y' => 1], ['x' => 1, 'y' => 1]]);
	}
}
