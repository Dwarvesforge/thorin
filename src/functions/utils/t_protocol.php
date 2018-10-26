<?php

/**
 * Return the protocol used to request the page
 * @return    {String}    The protocol used
 *
 * @example    php
 * $protocol = Thorin::protocol();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function t_protocol() {
	// return the protocol from the config
	return Thorin::config('app.protocol');
}
