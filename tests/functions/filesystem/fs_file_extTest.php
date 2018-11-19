<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class fs_file_ext extends TestCase
{
    public function testFsFileExtension() {
		$ext = Thorin::fs_file_ext('my/cool/file/path.jpg');
		$this->assertEquals($ext, 'jpg');
	}
}
