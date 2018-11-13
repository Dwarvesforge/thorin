<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_random_color extends TestCase
{
    public function testRandomColorLength() {
		$color = Thorin::random_color();
		$this->assertEquals(strlen($color) === 6, true);
	}
}
