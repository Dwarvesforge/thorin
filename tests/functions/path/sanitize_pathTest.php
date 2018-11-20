<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class sanitize_path extends TestCase
{
    public function testRemoveTheLastDot() {
		$path = '/coco/.';
		$this->assertEquals('/coco/', Thorin::sanitize_path($path));
	}

	public function testEndWithASlashEvenIfAlreadyOne() {
		$path = '/coco/';
		$this->assertEquals('/coco/', Thorin::sanitize_path($path));
	}

	public function testEndWithASlash() {
		$path = '/coco';
		$this->assertEquals('/coco/', Thorin::sanitize_path($path));
	}
}
