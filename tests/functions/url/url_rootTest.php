<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class url_root extends TestCase
{
    public function testEmptyRootUrl() {
		$this->assertEquals('/', Thorin::url_root());
	}

	public function testRootUrlWithSlug() {
		$this->assertEquals('/coco.jpg', Thorin::url_root('coco.jpg'));
	}

	public function testRootUrlWithDomainInclusion() {
		$this->assertEquals('http://thorin.io/img/coco.jpg', Thorin::url_root('/img//coco.jpg', true));
	}
}
