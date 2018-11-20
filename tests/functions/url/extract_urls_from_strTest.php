<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class extract_urls_from_str extends TestCase
{
    public function testExtractUrlsFromStr() {
		$urls = Thorin::extract_urls_from_str('Hello https://google.com, this is the universe talking');
		$this->assertEquals($urls, ['https://google.com/']);
	}
}
