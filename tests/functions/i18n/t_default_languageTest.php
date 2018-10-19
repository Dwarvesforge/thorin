<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_default_language extends TestCase
{
    public function testDefaultLanguageGetter() {
		$this->assertEquals(t_default_language(), 'en');
	}
}
