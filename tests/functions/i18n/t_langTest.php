<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_lang extends TestCase
{
    public function testLangDefaultTitle() {
		$this->assertEquals(t_lang('title'), 'hello world');
	}
	public function testLangAlternativeTitle() {
		$this->assertEquals(t_lang('title','alternative'), 'another hello world');
	}
	public function testLangComplexePath() {
		$this->assertEquals(t_lang('metas.title'), 'metas hello world');
	}
}
