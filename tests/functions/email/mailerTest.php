<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class mailer extends TestCase
{
    public function testGetDefaultMailer() {
		$mailer = Thorin::mailer();
		$this->assertEquals(isset($mailer->SMTPAuth), true);
	}
	public function testSendEmailUsingMailDriver() {
		$mailer = Thorin::mailer('mail');
		$mailer->addAddress('olivier.bossel@gmail.com', 'Olivier Bossel');
		$mailer->setFrom('olivier.bossel@gmail.com', 'Olivier Bossel');
		$mailer->Subject = 'Dwarvesforge Thorin Unit Test - Mail';
		$mailer->Body = 'Hello World';
		$mailer->AltBody = 'Hello World Alt';
		$result = $mailer->send();
		if ( ! $result) {
			die($mailer->ErrorInfo);
		} else {
			$this->assertEquals($result, true);
		}
	}
}
