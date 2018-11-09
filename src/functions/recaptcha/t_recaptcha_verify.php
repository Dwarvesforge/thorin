<?php
use Arcanedev\NoCaptcha\NoCaptcha;


function t_recaptcha_verify($response = null, $secret = null, $sitekey = null, $lang = null, $attributes = null) {
	$response = $response ?: $_POST['g-recaptcha-response'];
	$nocaptcha = Thorin::recaptcha_factory($secret, $sitekey, $lang, $attributes);
	return $nocaptcha->verify($response);
}
