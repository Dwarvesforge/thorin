<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class find extends TestCase
{
    public function testFind() {
		$users = [
			['user' => 'barney',  'age' => 36, 'active' => true],
			['user' => 'fred',    'age' => 40, 'active' => false],
			['user' => 'pebbles', 'age' => 1,  'active' => true]
		];
		$res = Thorin::find($users, function($o) { return $o['age'] < 40; });
		$this->assertEquals($res, ['user' => 'barney',  'age' => 36, 'active' => true]);
	}
}
