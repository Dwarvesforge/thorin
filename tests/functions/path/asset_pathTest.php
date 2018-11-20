<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class asset_path extends TestCase
{
    public function testImgAssetReturnGoodPath() {
		$this->assertEquals(Thorin::root_path('dist/img/coco.jpg'), Thorin::asset_path('img/coco.jpg'));
	}
}
