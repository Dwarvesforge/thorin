<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class sanitize_url extends TestCase
{
    public function testApplyTheFilterSanitizeUrlFlag() {
		$url = 'https://www.w3schoo��ls.co�m';
		$this->assertEquals(Thorin::sanitize_url($url), 'https://www.w3schools.com');
	}
	public function testCleanDoubleSlashed() {
		$url = 'https://coco.com/hello//world';
		$this->assertEquals(Thorin::sanitize_url($url), 'https://coco.com/hello/world');
	}
}
