<?php

/**
 * Return the domain
 * @return    {String}    The domain
 *
 * @example    php
 * $domain = Thorin::domain();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function t_domain() {
	// return the protocol from the config
	return Thorin::config('app.DOMAIN');
}
