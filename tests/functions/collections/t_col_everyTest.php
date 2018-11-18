<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_col_every extends TestCase
{
    public function testColEvery() {
		$res = Thorin::col_every([true, 1, null, 'yes'], function ($value) {
			return is_bool($value);
		});
		$this->assertEquals($res, false);
	}
}
