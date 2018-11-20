<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class language extends TestCase
{
    public function testGetLanguage() {
		$this->assertEquals(Thorin::language(), 'en');
	}
	public function testGetLanguageWithWeirdAvailableLanguages() {
		$this->assertEquals(Thorin::language(['it','es'], 'en'), 'en');
	}
}
