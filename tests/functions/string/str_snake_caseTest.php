<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_str_snake_case extends TestCase
{
    public function testSnakeCase() {
		$this->assertEquals(Thorin::str_snake_case('Foo Bar'), 'foo_bar');
	}
}
