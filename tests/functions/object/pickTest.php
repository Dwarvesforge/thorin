<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class pick extends TestCase
{
    public function testPick() {
		$object = (object) ['a' => 1, 'b' => '2', 'c' => 3];
		$res = Thorin::pick($object, ['a','c']);
		$this->assertEquals($res, (object) ['a' => 1, 'c' => 3]);
	}
}
