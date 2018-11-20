<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class app_protocol extends TestCase
{
    public function testAppProtocol() {
		$protocol = Thorin::app_protocol();
		$this->assertEquals($protocol, 'http://');
	}
}
