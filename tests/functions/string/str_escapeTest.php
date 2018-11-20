<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_str_escape extends TestCase
{
    public function testEscape() {
		$this->assertEquals(Thorin::str_escape('fred, barney, & pebbles'), 'fred, barney, &amp; pebbles');
	}
}
