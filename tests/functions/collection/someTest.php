<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class some extends TestCase
{
    public function testSome() {
		$res = Thorin::some([null, 0, 'yes', false], function ($value) {
			return \is_bool($value);
		});
		$this->assertEquals($res, true);
	}
}
