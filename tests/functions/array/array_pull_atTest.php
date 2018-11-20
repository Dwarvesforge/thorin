<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_pull_at extends TestCase
{
    public function testArrayPullAt() {
		$array = ['a', 'b', 'c', 'd'];
		$removed = Thorin::array_pull_at($array, [1, 3]);
		$this->assertEquals($removed, ['b','d']);
	}
}
