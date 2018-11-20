<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class email_mailer_config extends TestCase
{
    public function testGetDefaultMailerConfig() {
		$config = Thorin::email_mailer_config();
		$this->assertEquals(is_array($config), true);
	}
	public function testGetSpecificMailerConfig() {
		$config = Thorin::email_mailer_config('mailgun');
		$this->assertEquals(is_array($config), true);
	}
}
