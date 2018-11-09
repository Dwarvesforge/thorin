<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_recaptcha_display extends TestCase
{
    public function testGenerateARecaptchaDisplay() {
		$display = Thorin::recaptcha_display();
		$res = !empty($display);
		$this->assertEquals($res, true);
	}
}
