<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_is_ajax_request extends TestCase
{
    public function testIfIsAnAjaxRequest() {
		$this->assertEquals(Thorin::is_ajax_request(), false);
	}
}
