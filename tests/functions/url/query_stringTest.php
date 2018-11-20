<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class query_string extends TestCase
{
    public function testQueryString() {
		$qs = Thorin::query_string('https://thorin.io?query=value1&string=value2');
		$this->assertEquals($qs, [
			'query' => 'value1',
			'string' => 'value2'
		]);
	}
}
