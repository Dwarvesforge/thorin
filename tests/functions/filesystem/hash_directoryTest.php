<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class hash_directory extends TestCase
{
    public function testHashDirectory() {
		$hash = Thorin::hash_directory(Thorin::asset_path('/'));
		$this->assertEquals(strlen($hash), 32);
	}
}
