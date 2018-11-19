<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_is_error extends TestCase
{
    public function testIsError() {
		$this->assertEquals(Thorin::is_error(new Exception), true);
	}
}
