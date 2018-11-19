<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class path_sanitize_test extends TestCase
{
    public function testRemoveTheLastDot() {
		$path = '/coco/.';
		$this->assertEquals('/coco/', Thorin::path_sanitize($path));
	}

	public function testEndWithASlashEvenIfAlreadyOne() {
		$path = '/coco/';
		$this->assertEquals('/coco/', Thorin::path_sanitize($path));
	}

	public function testEndWithASlash() {
		$path = '/coco';
		$this->assertEquals('/coco/', Thorin::path_sanitize($path));
	}
}
