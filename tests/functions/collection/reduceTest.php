<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class reduce extends TestCase
{
    public function testReduce() {
		$res = Thorin::reduce(['a' => 1, 'b' => 2, 'c' => 1], function ($result, $value, $key) {
		   if (!isset($result[$value])) {
		       $result[$value] = [];
		   }
		   $result[$value][] = $key;
		   return $result;
		}, []);
		$this->assertEquals($res, ['1' => ['a', 'c'], '2' => ['b']]);
	}
}
