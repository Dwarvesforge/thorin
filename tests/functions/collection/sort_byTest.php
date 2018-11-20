<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class sort_by extends TestCase
{
    public function testSortBy() {
		$users = [
		  [ 'user' => 'fred',   'age' => 48 ],
		  [ 'user' => 'barney', 'age' => 36 ],
		  [ 'user' => 'fred',   'age' => 40 ],
		  [ 'user' => 'barney', 'age' => 34 ],
		];
		$res = Thorin::sort_by($users, [function($o) { return $o['user']; }]);
		$this->assertEquals($res, [['user' => 'barney', 'age' => 36], ['user' => 'barney', 'age' => 34], ['user' => 'fred', 'age' => 48], ['user' => 'fred', 'age' => 40]]);
	}
}
