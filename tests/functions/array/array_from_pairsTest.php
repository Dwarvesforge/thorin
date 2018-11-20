<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_from_pairs extends TestCase
{
    public function testArrayFromPairs() {
		$res = Thorin::array_from_pairs([['a', 1], ['b', 2]]);
		$this->assertEquals($res, (object) [
			'a' => 1,
			'b' => 2
		]);
	}
}
