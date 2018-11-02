<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_csrf_qs extends TestCase
{
    public function testQueryStringGeneration() {
		$qs = Thorin::csrf_qs();
		$this->assertEquals($qs !== null, true);
	}
	public function testQueryStringWithCustomNameGeneration() {
		$qs = Thorin::csrf_qs('my_csrf_token');
		$pos = strpos($qs, 'my_csrf_token');
		$this->assertEquals($pos !== false, true);
	}
}
