<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class url_sanitize extends TestCase
{
    public function testApplyTheFilterSanitizeUrlFlag() {
		$url = 'https://www.w3schoo��ls.co�m';
		$this->assertEquals(Thorin::url_sanitize($url), 'https://www.w3schools.com');
	}
	public function testCleanDoubleSlashed() {
		$url = 'https://coco.com/hello//world';
		$this->assertEquals(Thorin::url_sanitize($url), 'https://coco.com/hello/world');
	}
}
