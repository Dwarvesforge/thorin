<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_root_path_test extends TestCase
{
	public function testRootPath() {
		$this->assertEquals(Thorin::sanitize_path(Thorin::config('paths.DOCUMENT_ROOT')), Thorin::root_path());
	}
}
