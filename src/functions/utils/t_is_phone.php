<?php
/**
 * Return true if the request is made from a phone device
 * @return    {Boolean}    true if is phone, false if not
 *
 * @example    php
 * if (Thorin::is_phone()) {
 *   // do something
 * }
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 * @see    https://github.com/serbanghita/Mobile-Detect
 */
function t_is_phone() {
	$detect = Thorin::mobile_detect();
	return $detect->isMobile() && ! $detect->isTablet();
}
