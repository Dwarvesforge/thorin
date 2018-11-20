<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class url_segments extends TestCase
{
    public function testUrlQueryString() {
		$segments = Thorin::url_segments('https://thorin.io/hello/world?query=value1&string=value2');
		$this->assertEquals($segments, [
			1 => 'hello',
			2 => 'world'
		]);
	}
}
