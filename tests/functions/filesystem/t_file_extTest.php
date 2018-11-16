<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_file_ext extends TestCase
{
    public function testExtension() {
		$ext = Thorin::file_ext('my/cool/file/path.jpg');
		$this->assertEquals($ext, 'jpg');
	}
}
