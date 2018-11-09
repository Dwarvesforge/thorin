<?php

require_once 'bootstrap.php';

Thorin::archive_files(
	Thorin::base_path('data'),
	Thorin::base_path('data/image.zip')
);

Thorin::extract_files(
	Thorin::base_path('data/image.zip'),
	Thorin::base_path('data/extracted')
);
