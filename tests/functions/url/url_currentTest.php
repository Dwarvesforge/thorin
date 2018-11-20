<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class url_current extends TestCase
{
    public function testUrlCurrent() {
		$url = Thorin::url_current();
		$this->assertEquals($url, 'http://thorin.io/');
	}
}
