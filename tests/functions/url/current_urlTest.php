<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class current_url extends TestCase
{
    public function testCurrentUrl() {
		$url = Thorin::current_url();
		$this->assertEquals($url, 'http://thorin.io/');
	}
}
