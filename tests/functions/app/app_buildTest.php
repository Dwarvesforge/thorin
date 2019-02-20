<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class app_build extends TestCase
{
    public function testAppBuildTxt() {
		$build = Thorin::app_build('txt');
		$this->assertEquals($build, 'helloworld
');
	}
	public function testAppBuildConfig() {
		$build = Thorin::app_build('config');
		$this->assertEquals($build, 'plopworld');
	}
	public function testAppBuildHash() {
		$build = Thorin::app_build('hash');
		$this->assertEquals($build != null, true);
	}
}
