<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class domain extends TestCase
{
    public function testDomain() {
		$domain = Thorin::domain('https://thorin.io/hello/world?query=value1&string=value2');
		$this->assertEquals($domain, 'thorin.io');
	}
}
