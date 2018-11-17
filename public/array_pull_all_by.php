<?php

require_once 'bootstrap.php';

$array = [[ 'x' => 1 ], [ 'x' => 2 ], [ 'x' => 3 ], [ 'x' => 1 ]];
$array = Thorin::array_pull_all_by($array, [[ 'x' => 1 ], [ 'x' => 3 ]], 'x');
var_dump($array);
// [[ 'x' => 2 ]]
