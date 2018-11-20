<?php

namespace thorin;

/**
 * Gets the timestamp of the number of milliseconds that have elapsed since the Unix epoch (1 January 1970 00:00:00 UTC).
 *
 * @example    php
 * Thorin::now();
 * // 1511180325735
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 * @see    https://github.com/lodash-php/lodash-php/blob/master/src/Date/now.php
 */
function now():int {
	return \_::now();
}
