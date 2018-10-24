<?php

/**
 * Return the lodash php class that you can use directly
 * @return    {_}    The lodash class
 *
 * @example    php
 * $newArray = Thorin::_()::concat($array, 2, [3], [[4]]);
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function t__() {
	// return the lodash class
	return new _();
}
