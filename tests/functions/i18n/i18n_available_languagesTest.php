<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class i18n_available_languages extends TestCase
{
    public function testAvailableLanguagesGetter() {
		$languages = Thorin::i18n_available_languages();
		$this->assertEquals($languages, ['en','fr','it']);
	}
}
