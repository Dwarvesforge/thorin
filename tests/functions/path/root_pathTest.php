<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class path_root_test extends TestCase
{
	public function testRootPath() {
		$this->assertEquals(Thorin::sanitize_path(Thorin::config('path.document_root')), Thorin::root_path());
	}
}
