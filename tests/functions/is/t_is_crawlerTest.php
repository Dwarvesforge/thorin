<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_is_crawler extends TestCase
{
    public function testIfIsACrawlerBot() {
		$this->assertEquals(t_is_crawler(), false);
	}
}
