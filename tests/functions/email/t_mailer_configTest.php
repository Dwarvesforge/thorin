<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_mailer_config extends TestCase
{
    public function testGetDefaultMailerConfig() {
		$config = Thorin::mailer_config();
		$this->assertEquals(is_array($config), true);
	}
	public function testGetSpecificMailerConfig() {
		$config = Thorin::mailer_config('mailgun');
		$this->assertEquals(is_array($config), true);
	}
}
