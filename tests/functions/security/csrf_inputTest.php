<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_csrf_input extends TestCase
{
    public function testInputGeneration() {
		$input = Thorin::csrf_input();
		$this->assertEquals($input !== null, true);
	}
	public function testInputWithCustomNameGeneration() {
		$input = Thorin::csrf_input('my_csrf_token');
		$pos = strpos($input, 'my_csrf_token');
		$this->assertEquals($pos !== false, true);
	}
}
