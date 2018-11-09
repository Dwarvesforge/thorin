<?php
use Arcanedev\NoCaptcha\NoCaptcha;
/**
 * Create a Arcanedev\NoCaptcha\NoCaptcha nocaptcha instance to work with.
 * @param    {String}    [$secret=null]    The secret key of your recaptcha instance
 * @param    {String}    [$sitekey=null]    The site key of your recaptcha instance
 * @return    {Arcanedev\NoCaptcha\NoCaptcha}    A nocaptcha instance to work with
 *
 * @example    php
 * $nocaptcha = Thorin::nocaptcha_factory();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 * @see    https://github.com/ARCANEDEV/noCAPTCHA
 */
function t_recaptcha_factory($secret = null, $sitekey = null, $lang = null, $attributes = []) {
	$secret = $secret ?: Thorin::config('recaptcha.secret');
	$sitekey = $sitekey ?: Thorin::config('recaptcha.sitekey');
	$lang = $lang ?: Thorin::config('recaptcha.lang');
	$attributes = $attributes ?: Thorin::config('recaptcha.attributes');
	return new NoCaptcha($secret, $sitekey, $lang, $attributes);
}
