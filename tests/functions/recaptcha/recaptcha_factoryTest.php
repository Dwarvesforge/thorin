<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_recaptcha_factory extends TestCase
{
    public function testGetANocaptchaInstance() {
		$recaptcha = Thorin::recaptcha_factory();
		$res = method_exists($recaptcha, 'display');
		$this->assertEquals($res, true);
	}
}
