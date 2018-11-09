<?php

/**
 * Display a recaptcha using the configured secret, sitekey, lang and attributes
 * @param    {}
 */
function t_recaptcha_display($secret = null, $sitekey = null, $lang = null, $attributes = null) {
	$nocaptcha = Thorin::recaptcha_factory($secret, $sitekey, $lang, $attributes);
	$res = [];
	array_push($res, $nocaptcha->display());
	array_push($res, $nocaptcha->script());
	return implode("\n", $res);
}
