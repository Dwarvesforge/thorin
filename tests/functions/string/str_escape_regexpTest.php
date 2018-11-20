<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_str_escape_regexp extends TestCase
{
    public function testEscapeRegexp() {
		$this->assertEquals(Thorin::str_escape_regexp('[lodash](https://lodash.com/)'), '\[lodash\]\(https://lodash\.com/\)');
	}
}
