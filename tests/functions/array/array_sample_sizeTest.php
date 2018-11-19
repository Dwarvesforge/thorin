<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class array_sample_size extends TestCase
{
    public function testArraySampleSize() {
		$res = Thorin::array_sample_size([1,2,3,4,5], 3);
		$this->assertEquals(count($res) == 3, true);
	}
}
