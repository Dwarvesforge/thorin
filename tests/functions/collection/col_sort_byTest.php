<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class col_sort_by extends TestCase
{
    public function testColSortBy() {
		$users = [
		  [ 'user' => 'fred',   'age' => 48 ],
		  [ 'user' => 'barney', 'age' => 36 ],
		  [ 'user' => 'fred',   'age' => 40 ],
		  [ 'user' => 'barney', 'age' => 34 ],
		];
		$res = Thorin::col_sort_by($users, [function($o) { return $o['user']; }]);
		$this->assertEquals($res, [['user' => 'barney', 'age' => 36], ['user' => 'barney', 'age' => 34], ['user' => 'fred', 'age' => 48], ['user' => 'fred', 'age' => 40]]);
	}
}
