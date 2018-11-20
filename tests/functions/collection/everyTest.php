<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class every extends TestCase
{
    public function testEvery() {
		$res = Thorin::every([true, 1, null, 'yes'], function ($value) {
			return is_bool($value);
		});
		$this->assertEquals($res, false);
	}
}
