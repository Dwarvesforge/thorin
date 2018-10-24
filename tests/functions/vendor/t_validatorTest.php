<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_validator extends TestCase
{
    public function testIfGetAValidationInstance() {
		$isValid = Thorin::validator()->alnum()->length(1,15)->validate('alganet');
		$this->assertEquals($isValid, true);
	}
}
