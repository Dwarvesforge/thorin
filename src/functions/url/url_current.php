<?php

namespace thorin;

/**
 * Return the current url
 *
 * @return    {String}    The current url
 *
 * @example    php
 * Thorin::url_current();
 * // https://thorin.io/hello/world?query=string
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function url_current() {
	return \Thorin::url_root(@$_SERVER['REQUEST_URI'], true);
}
