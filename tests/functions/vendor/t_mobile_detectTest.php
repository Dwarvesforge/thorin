<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_mobile_detect extends TestCase
{
    public function testIfGetAMobileDetectInstance() {
		$md = Thorin::mobile_detect();
		$exist = method_exists($md, 'isMobile');
		$this->assertEquals($exist, true);
	}
}
