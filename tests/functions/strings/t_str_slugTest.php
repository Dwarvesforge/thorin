<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_str_slug extends TestCase
{
    public function testSlugCreation() {
		$slug = Thorin::str_slug('Hello world this is universe');
		$this->assertEquals($slug, 'hello-world-this-is-universe');
	}
}
