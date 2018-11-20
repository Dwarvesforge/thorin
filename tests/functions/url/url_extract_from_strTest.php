<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class url_extract_from_str extends TestCase
{
    public function testUrlExtractFromStr() {
		$urls = Thorin::url_extract_from_str('Hello https://google.com, this is the universe talking');
		$this->assertEquals($urls, ['https://google.com/']);
	}
}
