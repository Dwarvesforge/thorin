<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_str_start_case extends TestCase
{
    public function testStartCase() {
		$this->assertEquals(Thorin::str_start_case('--foo-bar--'), 'Foo Bar');
	}
}
