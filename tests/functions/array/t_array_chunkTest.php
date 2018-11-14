<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_chunk extends TestCase
{
    public function testArrayChunk() {
		$res = Thorin::array_chunk([1,2,3,4,5], 2);
		$this->assertEquals($res, [[1,2], [3,4], [5]]);
	}
}
