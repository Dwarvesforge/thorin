<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_sh extends TestCase
{
    public function testIfGetAShelwrapInstance() {
		$res = Thorin::sh('ls', '-la');
		$this->assertEquals($res !== null, true);
	}
}
