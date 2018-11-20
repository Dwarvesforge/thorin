<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_remove_empty extends TestCase
{
    public function testArrayRemoveEmpty() {
		$array = ['','hello','','world'];
		$narray = Thorin::array_remove_empty($array);
		$this->assertEquals(count($narray), 2);
	}
}
