<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_str_deburr extends TestCase
{
    public function testDeburr() {
		$this->assertEquals(Thorin::str_deburr('déjà vue'), 'deja vue');
	}
}
