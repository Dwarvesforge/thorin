<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class root_url extends TestCase
{
    public function testEmptyRootUrl() {
		$this->assertEquals('/', Thorin::root_url());
	}

	public function testRootUrlWithSlug() {
		$this->assertEquals('/coco.jpg', Thorin::root_url('coco.jpg'));
	}

	public function testRootUrlWithDomainInclusion() {
		$this->assertEquals('http://thorin.io/img/coco.jpg', Thorin::root_url('/img//coco.jpg', true));
	}
}
