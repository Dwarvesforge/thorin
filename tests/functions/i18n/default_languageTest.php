<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class default_language extends TestCase
{
    public function testDefaultLanguageGetter() {
		$this->assertEquals(Thorin::default_language(), 'en');
	}
}
