<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_str_capitalize extends TestCase
{
    public function testCapitalize() {
		$this->assertEquals(Thorin::str_capitalize('FRED'), 'Fred');
	}
}
