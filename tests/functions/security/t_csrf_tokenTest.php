<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_csrf_token extends TestCase
{
    public function testGetToken() {
		$token = Thorin::csrf_token();
		$this->assertEquals($token !== null, true);
	}
}
