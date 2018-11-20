<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class reduce_right extends TestCase
{
    public function testReduceRight() {
		$res = Thorin::reduce_right(['a' => 1, 'b' => 2, 'c' => 1], function ($result, $value, $key) {
		   if (!isset($result[$value])) {
		       $result[$value] = [];
		   }
		   $result[$value][] = $key;
		   return $result;
		}, []);
		$this->assertEquals($res, ['1' => ['c', 'a'], '2' => ['b']]);
	}
}
