<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class embed extends TestCase
{
    public function testEmbedYoutubeIframe() {
		$embed = Thorin::embed('https://www.youtube.com/watch?v=z4JUm0Bq9AM');
		$this->assertEquals(substr($embed,0,7), '<iframe');
	}
}
