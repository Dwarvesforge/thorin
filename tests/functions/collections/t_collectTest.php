<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_collect extends TestCase
{
    public function testCollect() {
		$collection = Thorin::collect([1,2,3]);
		$this->assertEquals($collection->reject !== null, true);
	}
}
