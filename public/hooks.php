<?php

require_once 'bootstrap.php';

Thorin::add_action('my_action', function() {
	print 'Hello world<br>';
});

print 'header<br>';
Thorin::do_action('my_action');
print 'Footer<br>';

Thorin::add_filter('coco', function($value) {
	return 'hello ' . $value;
});
Thorin::add_filter('coco', function($value) {
	return 'hello ' . $value;
});

print Thorin::apply_filters('coco', 'world');
