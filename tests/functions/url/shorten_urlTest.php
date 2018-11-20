<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class shorten_url extends TestCase
{
    public function testUrlShorten() {
		$res = Thorin::shorten_url('https://thorin.io');
		$this->assertEquals($res, 'http://tinyurl.com/y9tcvddg');
	}
}
