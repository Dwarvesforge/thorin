<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_is_ip_banned extends TestCase
{
    public function testIfLocalhostMatch() {
		$res = Thorin::is_ip_match([
			'23.433.23.333',
			'127.0.0.1'
		]);
		$this->assertEquals(true, $res);
	}
	public function testIfCustomIpMatch() {
		$res = Thorin::is_ip_match([
			'23.433.23.333',
			'23.433.*.*'
		], '23.433.55.76');
		$this->assertEquals(true, $res);
	}
}
