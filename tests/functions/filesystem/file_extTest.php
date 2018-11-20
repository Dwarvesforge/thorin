<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class file_ext extends TestCase
{
    public function testFileExtension() {
		$ext = Thorin::file_ext('my/cool/file/path.jpg');
		$this->assertEquals($ext, 'jpg');
	}
}
