<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_lodash extends TestCase
{
    public function testIfGetALodashInstance() {
		$array = [1];
		$newArray = Thorin::lodash()::concat($array, [2]);
		$this->assertEquals($newArray, [1,2]);
	}
}
