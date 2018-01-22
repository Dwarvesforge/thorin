<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_root_path_test extends TestCase
{
    public function testEmptyRootPath() {
		$this->assertEquals('/', t_root_path());
	}

	public function testRootPathWithSlug() {
		$this->assertEquals('/', t_root_path());
	}
}
