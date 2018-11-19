<?php

namespace thorin;

/**
 * Return the current url
 * @return    {String}    The current url
 *
 * @example    php
 * $current = Thorin::current_url();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function current_url() {
	return \Thorin::url_root(@$_SERVER['REQUEST_URI'], true);
}
