<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class available_languages extends TestCase
{
    public function testAvailableLanguagesGetter() {
		$languages = Thorin::available_languages();
		$this->assertEquals($languages, ['en','fr','it']);
	}
}
