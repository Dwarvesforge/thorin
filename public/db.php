<?php

require_once 'bootstrap.php';

$db = Thorin::db('sqlite');

// $db->getSchemaBuilder()->create('users', function ($table) {
//     $table->increments('id');
//     $table->string('email')->unique();
//     $table->timestamps();
// });

// $db->table('users')->insert(
//     ['email' => 'yop@example.com']
// );

use Illuminate\Database\Eloquent\Model;
class Users extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'users';

	protected $connection = 'mysql';
}

print '<pre>';
print_r(Users::all());

// $results = $db->table('users')->where('id', '=', 1)->get();
// print_r($results);
