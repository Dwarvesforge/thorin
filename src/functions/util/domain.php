<?php

namespace thorin;

/**
 * Return the domain
 * @return    {String}    The domain
 *
 * @example    php
 * $domain = Thorin::domain();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function domain() {
	// return the protocol from the config
	return \Thorin::config('app.domain');
}
