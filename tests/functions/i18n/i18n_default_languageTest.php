<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class i18n_default_language extends TestCase
{
    public function testDefaultLanguageGetter() {
		$this->assertEquals(Thorin::i18n_default_language(), 'en');
	}
}
