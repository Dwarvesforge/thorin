<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_extend extends TestCase
{
    public function testExtendSimpleObjects() {
		$extended = Thorin::extend((object) [
			'hello' => 'world'
		], (object) [
			'world' => 'hello'
		]);
		$this->assertEquals($extended, (object) [
			'hello' => 'world',
			'world' => 'hello'
		]);
	}
	public function testExtendComplexeObjects() {
		$extended = Thorin::extend((object) [
			'obj1' => (object) [
				'hello' => 'world'
			]
		], (object) [
			'obj1' => (object) [
				'world' => 'hello'
			]
		]);
		$this->assertEquals($extended, (object) [
			'obj1' => (object) [
				'hello' => 'world',
				'world' => 'hello'
			]
		]);
	}
	public function testExtendSimpleArrays() {
		$extended = Thorin::extend([
			'hello' => 'world'
		], [
			'world' => 'hello'
		]);
		$this->assertEquals($extended, [
			'hello' => 'world',
			'world' => 'hello'
		]);
	}
	public function testExtendComplexeArrays() {
		$extended = Thorin::extend([
			'obj1' => [
				'hello' => 'world'
			]
		], [
			'obj1' => [
				'world' => 'hello'
			]
		]);
		$this->assertEquals($extended, [
			'obj1' => [
				'hello' => 'world',
				'world' => 'hello'
			]
		]);
	}
}
