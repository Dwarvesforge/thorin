<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_order_by extends TestCase
{
    public function testArrayOrderBy() {
		$res = Thorin::array_order_by([
			['id' => 2, 'name' => 'Joy'],
			['id' => 3, 'name' => 'Khaja'],
			['id' => 1, 'name' => 'Raja']
		], 'id', 'desc');
		$this->assertEquals($res, [['id' => 3, 'name' => 'Khaja'], ['id' => 2, 'name' => 'Joy'], ['id' => 1, 'name' => 'Raja']]);
	}
}
