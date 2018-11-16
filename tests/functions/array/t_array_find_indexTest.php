<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_find_index extends TestCase
{
    public function testArrayFindIndex() {
		$users = [
		    ['user' => 'barney',  'active' => false],
		    ['user' => 'fred',    'active' => false],
		    ['user' => 'pebbles', 'active' => true],
		];
		$res = Thorin::array_find_index($users, function($o) {
			return $o['user'] == 'barney';
		});
		$this->assertEquals($res, 0);
	}
}
