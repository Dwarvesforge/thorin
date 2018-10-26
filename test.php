<?php

require_once 'vendor/autoload.php';
require_once 'src/autoload.php';

print Thorin::optimize_image(
	Thorin::base_path('data/image.jpg')
	// Thorin::base_path('data/image-optimized.jpg')
);
