<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_pre extends TestCase
{
    public function testASimplePre() {
		$res =  '<pre>
hello world
</pre>';
		$this->assertEquals(Thorin::pre('hello world'), $res);
	}
}
