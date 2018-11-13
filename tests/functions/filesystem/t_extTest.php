<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_ext extends TestCase
{
    public function testExtension() {
		$ext = Thorin::ext('my/cool/file/path.jpg');
		$this->assertEquals($ext, 'jpg');
	}
}
