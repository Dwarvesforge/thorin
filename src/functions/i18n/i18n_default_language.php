<?php

namespace thorin;

/**
 * Return the default language set in configuration
 *
 * @example    php
 * $lang = Thorin::i18n_default_language();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function i18n_default_language() {
	return \Thorin::config('i18n.default_language');
}
