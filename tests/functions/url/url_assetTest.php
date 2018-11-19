<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class url_asset extends TestCase
{
    public function testImgAssetReturnGoodPath() {
		$this->assertEquals('http://thorin.io/dist/img/coco.jpg', Thorin::url_asset('img/coco.jpg', true));
	}
}
