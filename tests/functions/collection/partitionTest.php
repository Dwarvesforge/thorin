<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class partition extends TestCase
{
    public function testPartition() {
		$users = [
		  ['user' => 'barney',  'age' => 36, 'active' => false],
		  ['user' => 'fred',    'age' => 40, 'active' => true],
		  ['user' => 'pebbles', 'age' => 1,  'active' => false]
		];
		$res = Thorin::partition($users, function($user) { return $user['active']; });
		$this->assertEquals($res, [
			[['user' => 'fred',    'age' => 40, 'active' => true]],
			[['user' => 'barney',  'age' => 36, 'active' => false], ['user' => 'pebbles', 'age' => 1,  'active' => false]]
		]);
	}
}
