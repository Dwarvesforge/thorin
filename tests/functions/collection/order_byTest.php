<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class order_by extends TestCase
{
    public function testOrderBy() {
		$users = [
		  ['user' => 'fred',   'age' => 48],
		  ['user' => 'barney', 'age' => 34],
		  ['user' => 'fred',   'age' => 40],
		  ['user' => 'barney', 'age' => 36]
		];
		$res = Thorin::order_by($users, ['user', 'age'], ['asc', 'desc']);
		$this->assertEquals($res != null, true);
	}
}
