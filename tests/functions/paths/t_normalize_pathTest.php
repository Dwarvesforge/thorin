<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_normalize_path_test extends TestCase
{
    public function testRemoveDoubleSlash() {
		$path = '/coco//world';
		$this->assertEquals('/coco/world', t_normalize_path($path));
	}

	public function testDoublePointsResolving() {
		$path = '/hello/world/../universe';
		$this->assertEquals('/hello/universe', t_normalize_path($path));
	}

	public function testStartingDoublePoint() {
		$path = '../coco';
		$this->assertEquals('../coco', t_normalize_path($path));
	}
}
