<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_remove_whitespaces extends TestCase
{
    public function testRemoveWhitespaces() {
		$noWhitespaces = t_remove_whitespaces('hello world this is universe');
		$this->assertEquals($noWhitespaces, 'helloworldthisisuniverse');
	}
}
