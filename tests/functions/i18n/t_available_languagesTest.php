<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_available_languages extends TestCase
{
    public function testAvailableLanguagesGetter() {
		$this->assertEquals(t_available_languages(), ['en','fr']);
	}
}
