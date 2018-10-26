<?php

require_once 'vendor/autoload.php';
require_once 'src/autoload.php';

$fs = Thorin::disk('base');
print_r($fs->listContents('/'));
