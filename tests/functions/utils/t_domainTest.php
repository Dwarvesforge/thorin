<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_domain extends TestCase
{
    public function testDomain() {
		$domain = T::domain();
		$this->assertEquals($domain, 'thorin.io');
	}
}
