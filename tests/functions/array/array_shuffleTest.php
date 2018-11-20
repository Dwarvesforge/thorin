<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class array_shuffle extends TestCase
{
    public function testArrayShuffle() {
		$res = Thorin::array_shuffle([1,2,3,4,5]);
		$this->assertEquals(count($res) == 5, true);
	}
}
