<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class fn_curry extends TestCase
{
    public function testCurry() {
		$curriedAdd = Thorin::fn_curry(function ($a, $b) {
			return $a + $b;
		});
		$res = $curriedAdd(10)(15);
		$this->assertEquals($res, 25);
	}
}
