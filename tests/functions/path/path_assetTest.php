<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class path_asset extends TestCase
{
    public function testImgAssetReturnGoodPath() {
		$this->assertEquals(Thorin::path_root('dist/img/coco.jpg'), Thorin::path_asset('img/coco.jpg'));
	}
}
