<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_faker extends TestCase
{
    public function testIfGetAFakerInstance() {
		$isFaker = Thorin::faker()->sentence != null;
		$this->assertEquals($isFaker, true);
	}
}
