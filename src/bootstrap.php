<?php

// .env file
$envPath = rtrim((isset($_SERVER['PWD'])) ? $_SERVER['PWD'] : $_SERVER['DOCUMENT_ROOT'], '/') . '/';
if (file_exists($envPath . '.env')) {
	$t_dotenv = new Dotenv\Dotenv($envPath);
	$t_dotenv->load();
} else {
	$t_dotenv = null;
}

// autoload
require_once 'autoload.php';
