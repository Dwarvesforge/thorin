<?php

require_once 'bootstrap.php';

print Thorin::render_mustache('layout/nested', [
	'message' => 'Hello World'
]);

print Thorin::render_mustache('layout/nested', [
	'message' => 'Hello World'
]);
