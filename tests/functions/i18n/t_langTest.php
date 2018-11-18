<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_lang extends TestCase
{
    public function testLangDefaultTitle() {
		$this->assertEquals(Thorin::lang('default.title'), 'hello world');
	}
	public function testLangAlternativeTitle() {
		$this->assertEquals(Thorin::lang('alternative.title'), 'another hello world');
	}
	public function testLangComplexePath() {
		$this->assertEquals(Thorin::lang('default.metas.title'), 'metas hello world');
	}
}
