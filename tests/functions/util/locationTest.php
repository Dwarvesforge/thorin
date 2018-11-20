<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_location extends TestCase
{
    public function testLocation() {
		$location = Thorin::location('62.202.30.224');
		$this->assertEquals($location['city'], 'Geneva');
	}
}
