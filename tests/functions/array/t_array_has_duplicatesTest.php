<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_has_duplicates extends TestCase
{
    public function testArrayHasDuplicates() {
		$res = Thorin::array_has_duplicates([1,2,3,1,2,1]);
		$this->assertEquals($res, true);
	}
}
