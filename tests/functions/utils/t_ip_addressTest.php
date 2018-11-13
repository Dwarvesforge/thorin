<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_ip_address extends TestCase
{
    public function testIpAddress() {
		$ip_address = Thorin::ip_address();
		$this->assertEquals($ip_address, '127.0.0.1');
	}
}
