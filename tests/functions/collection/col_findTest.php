<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class col_find extends TestCase
{
    public function testColFind() {
		$users = [
			['user' => 'barney',  'age' => 36, 'active' => true],
			['user' => 'fred',    'age' => 40, 'active' => false],
			['user' => 'pebbles', 'age' => 1,  'active' => true]
		];
		$res = Thorin::col_find($users, function($o) { return $o['age'] < 40; });
		$this->assertEquals($res, ['user' => 'barney',  'age' => 36, 'active' => true]);
	}
}
