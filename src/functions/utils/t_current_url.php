<?php
/**
 * Return the current url
 * @return    {String}    The current url
 *
 * @example    php
 * $current = Thorin::current_url();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function t_current_url() {
	return Thorin::root_url(@$_SERVER['REQUEST_URI']);
}
