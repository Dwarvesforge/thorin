<?php

// .env file
$envPath = rtrim((isset($_SERVER['PWD'])) ? $_SERVER['PWD'] : $_SERVER['DOCUMENT_ROOT'], '/') . '/';
$t_dotenv = null; $envFilePath = null;
if (file_exists($envPath . '.env')) $envFilePath = $envPath;
else if (file_exists($envPath.'../.env')) $envFilePath = $envPath . '../';
if ($envFilePath) {
	$t_dotenv = new Dotenv\Dotenv($envFilePath);
	$t_dotenv->load();
}

// autoload
require_once 'autoload.php';
