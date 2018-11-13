<?php

require_once 'bootstrap.php';

class MyCoolClass {

	public $hello = 'World';

	public function __construct($name) {
		$this->name = $name;
	}

	public function sayHello($to, $fe) {
		print 'hello ' . $to;
	}
}

$array = [
	'hello' => 'World'
];

$instance = new MyCoolClass('john');

print Thorin::pre($instance);
print Thorin::pre($array);
