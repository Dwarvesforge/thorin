<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_take_while extends TestCase
{
    public function testArrayTakeWhile() {
		$users = [
		  [ 'user' => 'barney',  'active' => false ],
		  [ 'user' => 'fred',    'active' => true ],
		  [ 'user' => 'pebbles', 'active' => true ]
		];
		$res = Thorin::array_take_while($users, function($value) { return $value['active'] == false; });
		$this->assertEquals($res, [
			[ 'user' => 'barney',  'active' => false ]
		]);
	}
}
