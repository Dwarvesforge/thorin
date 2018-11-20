<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_array_zip_object extends TestCase
{
    public function testArrayZipObject() {
		$res = Thorin::array_zip_object(['a', 'b'], [1, 2]);
		$this->assertEquals($res, (object) [
			'a' => 1,
			'b' => 2
		]);
	}
}
