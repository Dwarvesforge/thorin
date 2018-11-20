<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class url_domain extends TestCase
{
    public function testUrlDomain() {
		$domain = Thorin::url_domain('https://thorin.io/hello/world?query=value1&string=value2');
		$this->assertEquals($domain, 'thorin.io');
	}
}
