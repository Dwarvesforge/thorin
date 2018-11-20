<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class fn_compose extends TestCase
{
    public function testCompose() {
		$composed = Thorin::fn_compose(function($x) {
			return $x + 1;
		}, function($y) {
			return $y + 10;
		});
		$res = $composed(2);
		$this->assertEquals($res, 13);
	}
}
