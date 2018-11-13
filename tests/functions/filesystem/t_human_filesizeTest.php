<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_human_filesize extends TestCase
{
    public function testHumanFilesize() {
		$size = Thorin::human_filesize(14356543);
		$this->assertEquals($size, '13.69 MB');
	}
}
