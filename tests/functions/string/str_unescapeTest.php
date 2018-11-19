<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_str_unescape extends TestCase
{
    public function testUnescape() {
		$this->assertEquals(Thorin::str_unescape('fred, barney, &amp; pebbles'), 'fred, barney, & pebbles');
	}
}
