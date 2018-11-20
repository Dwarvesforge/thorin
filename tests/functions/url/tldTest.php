<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class tld extends TestCase
{
    public function testTld() {
		$tld = Thorin::tld('https://thorin.io/hello/world?query=value1&string=value2');
		$this->assertEquals($tld, 'io');
	}
}
