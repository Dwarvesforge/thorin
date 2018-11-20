<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class email_has_mx extends TestCase
{
    public function testEmailHasMx() {
		$res = Thorin::email_has_mx('hello@google.com');
		$this->assertEquals($res, true);
	}
}
