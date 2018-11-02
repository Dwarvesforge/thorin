<?php

require_once 'bootstrap.php';

$db = Thorin::db();

// $db->schema()->create('users', function ($table) {
//     $table->increments('id');
//     $table->string('email')->unique();
//     $table->timestamps();
// });

// $db->table('users')->insert(
//     ['email' => 'johdn@example.com']
// );

$results = $db->table('users')->where('id', '=', 1)->get();
print_r($results);
