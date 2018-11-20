<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_pull_all extends TestCase
{
    public function testArrayPullAll() {
		$array = ['a', 'b', 'c', 'a', 'b', 'c'];
		$array = Thorin::array_pull_all($array, ['a', 'c']);
		$this->assertEquals($array, ['b','b']);
	}
}
