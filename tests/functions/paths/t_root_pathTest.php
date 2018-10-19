<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_root_path_test extends TestCase
{
    public function testEmptyRootPath() {
		$this->assertEquals('/', t_root_path());
	}

	public function testRootPathWithSlug() {
		$this->assertEquals('/coco.jpg', t_root_path('coco.jpg'));
	}

	public function testRootPathFromServerRoot() {
		$root = Thorin::root_path(null, true);
		$this->assertEquals(Thorin::tailslash($root), t_root_path('', true));
	}

	public function testRootPathFromServerRootWithSlug() {
		$root = Thorin::root_path(null, true);
		$this->assertEquals($root . 'coco.jpg', t_root_path('coco.jpg', true));
	}
}
