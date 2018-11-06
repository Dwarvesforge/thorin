<?php

require_once 'bootstrap.php';

$emitter = Thorin::emitter();
$emitter->addListener('event.name', function($event, $arg1) {
	print 'event.name called!' . $arg1;
	// print Thorin::pre($event);
});

$emitter1 = Thorin::emitter('hello');
$emitter1->addListener('event.name', function($event) {
	print 'event.name called!';
});

$emitter->emit('event.name', 'hello world');
