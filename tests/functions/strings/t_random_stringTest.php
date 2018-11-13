<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_random_string extends TestCase
{
    public function testRandomStringLength() {
		$this->assertEquals(strlen(t_random_string(20)), 20);
	}
}
