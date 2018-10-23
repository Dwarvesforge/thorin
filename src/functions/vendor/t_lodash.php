<?php

/**
 * Return the lodash php class that you can use directly
 * @return    {_}    The lodash class
 *
 * @example    php
 * $newArray = Thorin::lodash()::concat($array, 2, [3], [[4]]);
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 * @see    https://github.com/lodash-php/lodash-php
 */
function t_lodash() {
	// return the lodash class
	return new _();
}
