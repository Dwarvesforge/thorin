<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class dir_size extends TestCase
{
    public function testDirSize() {
		$size = Thorin::dir_size(Thorin::base_path());
		$this->assertEquals($size > 0, true);
	}
}
