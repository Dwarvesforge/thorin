<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_language extends TestCase
{
    public function testGetLanguage() {
		$this->assertEquals(t_language(), 'en');
	}
	public function testGetLanguageWithWeirdAvailableLanguages() {
		$this->assertEquals(t_language(['it','es'], 'en'), 'en');
	}
}
