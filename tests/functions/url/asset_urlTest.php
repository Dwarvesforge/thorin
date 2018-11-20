<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class asset_url extends TestCase
{
    public function testImgAssetReturnGoodPath() {
		$this->assertEquals('http://thorin.io/dist/img/coco.jpg', Thorin::asset_url('img/coco.jpg', true));
	}
}
