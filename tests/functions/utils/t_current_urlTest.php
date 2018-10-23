<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_current_url extends TestCase
{
    public function testCurrentUrl() {
		$url = T::current_url();
		$this->assertEquals($url, 'http://thorin.io/');
	}
}
