<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_slug extends TestCase
{
    public function testSlugCreation() {
		$slug = Thorin::slug('Hello world this is universe');
		$this->assertEquals($slug, 'hello-world-this-is-universe');
	}
}
