<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_str_kebab_case extends TestCase
{
    public function testKebabCase() {
		$this->assertEquals(Thorin::str_kebab_case('Foo Bar'), 'foo-bar');
	}
}
