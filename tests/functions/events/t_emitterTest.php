<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_emitter extends TestCase
{
    public function testEmitter() {
		$emitter = Thorin::emitter();
		$emitter->addListener('my-event', function($e) {
			$this->assertEquals(true, true);
		});
		$emitter->emit('my-event');
	}
}
