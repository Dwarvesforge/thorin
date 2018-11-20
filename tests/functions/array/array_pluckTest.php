<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_pluck extends TestCase
{
    public function testArrayPluck() {
		$res = Thorin::array_pluck([
			['product_id' => 'prod-100', 'name' => 'Desk'],
   			['product_id' => 'prod-200', 'name' => 'Chair'],
		], 'name');
		$this->assertEquals($res, ['Desk','Chair']);
	}
}
