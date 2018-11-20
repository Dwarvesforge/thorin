<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class protocol extends TestCase
{
    public function testProtocol() {
		$protocol = Thorin::protocol('https://thorin.io/hello/world?query=value1&string=value2');
		$this->assertEquals($protocol, 'https');
	}
}
