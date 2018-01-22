<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_server_root_path_test extends TestCase
{
    public function testEmptyServerRootPath() {
		$this->assertEquals('/data/web/', t_server_root_path());
	}
	public function testServerRootPathWithSlug() {
		$this->assertEquals('/data/web/coco.jpg', t_server_root_path('coco.jpg'));
	}
}
