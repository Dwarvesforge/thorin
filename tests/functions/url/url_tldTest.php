<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class url_tld extends TestCase
{
    public function testUrlQueryString() {
		$tld = Thorin::url_tld('https://thorin.io/hello/world?query=value1&string=value2');
		$this->assertEquals($tld, 'io');
	}
}
