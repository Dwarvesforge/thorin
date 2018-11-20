<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class fs_dir_size extends TestCase
{
    public function testFsDirSize() {
		$size = Thorin::fs_dir_size(Thorin::path_base());
		$this->assertEquals($size > 0, true);
	}
}
