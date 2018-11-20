<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_deep_flatten extends TestCase
{
    public function testArrayDeepFlatten() {
		$res = Thorin::array_deep_flatten([1, [2], [[3], 4], 5]);
		$this->assertEquals($res, [1, 2, 3, 4, 5]);
	}
	public function testArrayDeepFlattenAssoc() {
		$res = Thorin::array_deep_flatten([
			'hello' => 'world',
			'universe' => [
				'yop' => 'plop'
			]
		]);
		$this->assertEquals($res, ['world','plop']);
	}
}
