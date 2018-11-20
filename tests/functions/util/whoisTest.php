<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_whois extends TestCase
{
    public function testWhoisQuery() {
		$whois = Thorin::whois('olivierbossel.com');
		$this->assertEquals($whois !== '', true);
	}
}
