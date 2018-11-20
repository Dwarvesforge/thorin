<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class url_subdomain extends TestCase
{
    public function testUrlSubdomain() {
		$subdomain = Thorin::url_subdomain('https://hello.thorin.io/hello/world?query=value1&string=value2');
		$this->assertEquals($subdomain, 'hello');
	}
}
