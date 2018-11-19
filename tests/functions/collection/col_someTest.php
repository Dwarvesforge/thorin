<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class col_some extends TestCase
{
    public function testColSome() {
		$res = Thorin::col_some([null, 0, 'yes', false], function ($value) {
			return \is_bool($value);
		});
		$this->assertEquals($res, true);
	}
}
