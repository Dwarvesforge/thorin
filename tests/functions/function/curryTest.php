<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class curry extends TestCase
{
    public function testCurry() {
		$curriedAdd = Thorin::curry(function ($a, $b) {
			return $a + $b;
		});
		$res = $curriedAdd(10)(15);
		$this->assertEquals($res, 25);
	}
}
