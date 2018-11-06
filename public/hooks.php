<?php

require_once 'bootstrap.php';

Thorin::add_action('my_action', function() {
	print 'Hello world<br>';
});

print 'header<br>';
Thorin::do_action('my_action');
print 'Footer<br>';
