<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class app_domain extends TestCase
{
    public function testAppDomain() {
		$domain = Thorin::app_domain();
		$this->assertEquals($domain, 'thorin.io');
	}
}
