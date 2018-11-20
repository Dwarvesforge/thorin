<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class i18n extends TestCase
{
    public function testLangDefaultTitle() {
		$this->assertEquals(Thorin::i18n('default.title'), 'hello world');
	}
	public function testLangAlternativeTitle() {
		$this->assertEquals(Thorin::i18n('alternative.title'), 'another hello world');
	}
	public function testLangComplexePath() {
		$this->assertEquals(Thorin::i18n('default.metas.title'), 'metas hello world');
	}
	public function testLangSpecificLanguage() {
		$this->assertEquals(Thorin::i18n('default.title', 'fr'), 'hello le monde');
	}
	public function testLangSpecificLanguageThatDidntExist() {
		$this->assertEquals(Thorin::i18n('default.metas.title', 'fr'), 'metas hello world');
	}
}
