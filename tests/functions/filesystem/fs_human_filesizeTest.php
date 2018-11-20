<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class fs_human_filesize extends TestCase
{
    public function testFsHumanFilesize() {
		$size = Thorin::fs_human_filesize(14356543);
		$this->assertEquals($size, '13.69 MB');
	}
}
