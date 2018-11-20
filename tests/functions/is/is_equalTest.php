<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_is_equal extends TestCase
{
    public function testIsEqual() {
		$env = Thorin::is_equal(['a' => 1], ['a' => '1']);
		$this->assertEquals($env, true);
	}
}
