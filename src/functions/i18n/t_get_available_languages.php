<?php
/**
 * Return the available languages set in configuration
 *
 * @example    php
 * $langs = Thorin::get_available_languages();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function t_get_available_languages() {
	return Thorin::config('i18n.AVAILABLE_LANGUAGES');
}
