<?php

define('T_CONFIG_PATH', __DIR__ . '/../app/config/');
require_once '../vendor/autoload.php';
require_once '../src/bootstrap.php';

$mailer = Thorin::mailer('mailgun');
$mailer->addAddress('olivier.bossel@gmail.com', 'Olivier Bossel');
$mailer->Subject = 'Dwarvesforge Thorin Unit Test - Mailgun';
$mailer->Body = 'Hello World';
$mailer->AltBody = 'Hello World Alt';
$result = $mailer->send();
if ( ! $result) {
	print 'error';
	print str_replace('->', '<br>', $mailer->ErrorInfo);
}
