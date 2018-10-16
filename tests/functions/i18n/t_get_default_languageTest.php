<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_get_default_language extends TestCase
{
    public function testDefaultLanguageGetter() {
		$this->assertEquals(t_get_default_language(), 'en');
	}
}
