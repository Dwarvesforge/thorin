<?php

use duncan3dc\Sessions\Session;

/**
 * Destroy the whole session
 * @example    php
 * Thorin::session_destroy();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function t_session_destroy() {
	Session::destroy();
}
