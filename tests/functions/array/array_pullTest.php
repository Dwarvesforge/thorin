<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_pull extends TestCase
{
    public function testArrayPull() {
		$array = ['a', 'b', 'c', 'a', 'b', 'c'];
		$array = Thorin::array_pull($array, 'a', 'c');
		$this->assertEquals($array, ['b','b']);
	}
}
