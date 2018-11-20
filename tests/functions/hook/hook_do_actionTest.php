<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class hook_do_action extends TestCase
{
    public function testAddFilter() {
		Thorin::hook_add_action('my-action-2', function() {
			print 'Hello world';
		});
		ob_start();
		Thorin::hook_do_action('my-action-2');
		$res = ob_get_clean();
		$this->assertEquals($res, 'Hello world');
	}
}
