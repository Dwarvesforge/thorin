<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class i18n_language extends TestCase
{
    public function testGetLanguage() {
		$this->assertEquals(Thorin::i18n_language(), 'en');
	}
	public function testGetLanguageWithWeirdAvailableLanguages() {
		$this->assertEquals(Thorin::i18n_language(['it','es'], 'en'), 'en');
	}
}
