<?php

namespace thorin;

/**
 * Return the environment set in `app.ENVIRONMENT` config
 * @return    {String}    The environment
 *
 * @example    php
 * $env = Thorin::environment();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function environment() {
	// return the environment from the config
	return \Thorin::config('app.environment');
}