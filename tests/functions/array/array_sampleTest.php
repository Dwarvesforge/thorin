<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class array_sample extends TestCase
{
    public function testArraySample() {
		$res = Thorin::array_sample([1,2,3,4,5]);
		$this->assertEquals($res <= 5, true);
	}
}
