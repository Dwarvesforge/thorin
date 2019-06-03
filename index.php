<?php

require_once 'vendor/autoload.php';
require_once 'src/autoload.php';

Thorin::route('GET', '/hello-world', function() {
	return 'hello world!';
});
Thorin::route('GET', '/hello/[:name]', function($request) {
	return 'hello' . ' ' . $request->name;
});
