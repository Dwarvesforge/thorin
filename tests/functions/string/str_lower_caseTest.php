<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_str_lower_case extends TestCase
{
    public function testLowerCase() {
		$this->assertEquals(Thorin::str_Lower_case('--Foo-Bar--'), 'foo bar');
	}
}
