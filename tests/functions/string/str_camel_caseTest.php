<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_str_camel_case extends TestCase
{
    public function testCamelCase() {
		$this->assertEquals(Thorin::str_camel_case('FOO BAR'), 'fooBar');
	}
}
