<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_reject extends TestCase
{
    public function testArrayReject() {
		$array = Thorin::array_reject(['Apple', 'Pear', 'Kiwi', 'Banana'], function ($item) {
			return strlen($item) > 4;
		});
		$this->assertEquals($array, ['Pear','Kiwi']);
	}
}
