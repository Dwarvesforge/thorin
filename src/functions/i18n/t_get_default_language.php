<?php
/**
 * Return the default language set in configuration
 *
 * @example    php
 * $lang = Thorin::get_default_language();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function t_get_default_language() {
	return Thorin::config('i18n.DEFAULT_LANGUAGE');
}
