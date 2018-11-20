<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class subdomain extends TestCase
{
    public function testSubdomain() {
		$subdomain = Thorin::subdomain('https://hello.thorin.io/hello/world?query=value1&string=value2');
		$this->assertEquals($subdomain, 'hello');
	}
}
