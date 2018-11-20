<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class media_embed extends TestCase
{
    public function testEmbedYoutubeIframe() {
		$embed = Thorin::media_embed('https://www.youtube.com/watch?v=z4JUm0Bq9AM');
		$this->assertEquals(substr($embed,0,7), '<iframe');
	}
}
