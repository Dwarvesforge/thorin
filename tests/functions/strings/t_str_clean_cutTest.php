<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_str_clean_cut extends TestCase
{
    public function testSimpleCut() {
		$cutedString = t_str_clean_cut('This is my cool string to cut', 10);
		$this->assertEquals($cutedString, 'This is...');
	}
	public function testSimpleCutWithCustomCutString() {
		$cutedString = t_str_clean_cut('This is my cool string to cut', 10, ';');
		$this->assertEquals($cutedString, 'This is;');
	}
}
