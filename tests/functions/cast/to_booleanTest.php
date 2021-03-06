<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_to_boolean_test extends TestCase
{
    public function testPassingAZeroInterger() {
		$this->assertEquals(Thorin::to_boolean(0), false);
	}
	public function testPassingAOneInterger() {
		$this->assertEquals(Thorin::to_boolean(1), true);
	}
	public function testPassingTrueAsAString() {
		$this->assertEquals(Thorin::to_boolean('true'), true);
	}
	public function testPassingFalseAsAString() {
		$this->assertEquals(Thorin::to_boolean('false'), false);
	}
	public function testPassingTrueAsABoolean() {
		$this->assertEquals(Thorin::to_boolean(true), true);
	}
	public function testPassingFalseAsABoolean() {
		$this->assertEquals(Thorin::to_boolean(false), false);
	}
}
