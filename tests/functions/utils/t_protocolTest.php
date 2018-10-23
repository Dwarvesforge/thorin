<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_protocol extends TestCase
{
    public function testGetProtocol() {
		$protocol = T::protocol();
		$this->assertEquals($protocol, 'http://');
	}
}
