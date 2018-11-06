<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_session_id extends TestCase
{
    public function testGetSessionId() {
		$id = Thorin::session_id();
		$this->assertEquals($id !== null, true);
	}
}
