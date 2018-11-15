<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_is_assoc extends TestCase
{
    public function testPassingAnAssocArray() {
		$this->assertEquals(Thorin::array_is_assoc([
			'hello' => 'world'
		]), true);
	}
	public function testPassingANonAssocArray() {
		$this->assertEquals(Thorin::array_is_assoc([
			'hello', 'world'
		]), false);
	}
}
