<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class path_normalize_test extends TestCase
{
    public function testRemoveDoubleSlash() {
		$path = '/coco//world';
		$this->assertEquals('/coco/world', Thorin::path_normalize($path));
	}

	public function testDoublePointsResolving() {
		$path = '/hello/world/../universe';
		$this->assertEquals('/hello/universe', Thorin::path_normalize($path));
	}

	public function testStartingDoublePoint() {
		$path = '../coco';
		$this->assertEquals('../coco', Thorin::path_normalize($path));
	}
}
