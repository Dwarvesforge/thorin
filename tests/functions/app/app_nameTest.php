<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class app_name extends TestCase
{
    public function testAppName() {
		$name = Thorin::app_name();
		$this->assertEquals($name, 'Thorin Application');
	}
}
