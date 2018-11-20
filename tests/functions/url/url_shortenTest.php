<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class url_shorten extends TestCase
{
    public function testUrlShorten() {
		$res = Thorin::url_shorten('https://thorin.io');
		$this->assertEquals($res, 'http://tinyurl.com/y9tcvddg');
	}
}
