<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class url_query_string extends TestCase
{
    public function testUrlQueryString() {
		$qs = Thorin::url_query_string('https://thorin.io?query=value1&string=value2');
		$this->assertEquals($qs, [
			'query' => 'value1',
			'string' => 'value2'
		]);
	}
}
