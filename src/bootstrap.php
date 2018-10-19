<?php

// .env file
$envPath = rtrim((isset($_SERVER['PWD'])) ? $_SERVER['PWD'] : $_SERVER['DOCUMENT_ROOT'], '/') . '/';
$t_dotenv = new Dotenv\Dotenv($envPath);
$t_dotenv->load();

// autoload
require_once 'autoload.php';
