<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class event_emitter extends TestCase
{
    public function testEventEmitter() {
		$emitter = Thorin::event_emitter();
		$emitter->addListener('my-event', function($e) {
			$this->assertEquals(true, true);
		});
		$emitter->emit('my-event');
	}
}
